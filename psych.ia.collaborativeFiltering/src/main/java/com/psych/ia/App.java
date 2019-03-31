package com.go.up;

import org.apache.spark.SparkConf;
import org.apache.spark.api.java.JavaPairRDD;
import org.apache.spark.api.java.JavaRDD;
import org.apache.spark.api.java.JavaSparkContext;

import org.apache.spark.ml.Pipeline;
import org.apache.spark.ml.PipelineStage;
import org.apache.spark.ml.evaluation.RegressionEvaluator;
import org.apache.spark.ml.recommendation.ALS;
import org.apache.spark.ml.recommendation.ALSModel;
import org.apache.spark.mllib.recommendation.Rating;

import org.apache.spark.sql.Dataset;
import org.apache.spark.sql.Row;
import org.apache.spark.sql.SparkSession;
import org.apache.spark.sql.types.DataTypes;
import org.apache.spark.sql.types.Metadata;
import org.apache.spark.sql.types.StructField;
import org.apache.spark.sql.types.StructType;
import scala.Tuple2;

import java.io.IOException;
/**
 * Hello world!
 *
 */

public class App {
    public static void main( String[] args ) {
        SparkConf conf = new SparkConf()
                .setAppName("sostream Collaborative Filtering")
                .setMaster("local")
                .set("spark.executor.memory","5g");
        JavaSparkContext jsc = new JavaSparkContext(conf);

        SparkSession spark = SparkSession
                .builder().config(conf)
                .appName("Java Spark SQL Example")
                .getOrCreate();

        StructType customSchema = new StructType(new StructField[] {
                new StructField("user", DataTypes.IntegerType, true, Metadata.empty()),
                new StructField("movie", DataTypes.IntegerType , true, Metadata.empty()),
                new StructField("score", DataTypes.FloatType , true, Metadata.empty()),
        });

        String path = "data/cooperativeFilter.txt";
        Dataset<Row> df = spark.read()
                .option("mode", "FAILFAST")
                .option("header", true)
                .option("delimiter", ";")
                .schema(customSchema)
                .csv(path);

        // on fait le découpage
        Dataset<Row>[] splits = df.randomSplit(new double[]{0.8, 0.2});
        Dataset<Row> training = splits[0];
        Dataset<Row> test = splits[1];

        // Build the recommendation model using ALS on the training data
        ALS als = new ALS()
                .setMaxIter(5)
                .setRegParam(0.01)
                .setUserCol("user")
                .setItemCol("movie")
                .setRatingCol("score");

        ALSModel model = als.fit(training);// entrainement


        // pour faire la prediction
        Dataset<Row> predictions = model.transform(test);
        predictions.show();


        // on evalue le model avec les données de test
        RegressionEvaluator evaluator = new RegressionEvaluator()
                .setMetricName("rmse")
                .setLabelCol("score")
                .setPredictionCol("prediction");
        Double rmse = evaluator.evaluate(predictions);
        System.out.println("Root-mean-square error = " + rmse);


        //model.write().overwrite().save("C://target/tmp/movie");


    }
}
