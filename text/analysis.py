import json
import pandas as pd
from sklearn.naive_bayes import MultinomialNB
from sklearn.feature_extraction.text import CountVectorizer
from sklearn import metrics

def analyse_text(text):
    tweets_data_path = '../files/tweetdata.txt'

    tweets_data = []
    tweets_file = open(tweets_data_path, "r")
    for line in tweets_file:
        try:
            tweet = json.loads(line)
            tweets_data.append(tweet)
        except:
            continue

    sent = pd.read_excel('../files/sentiment.xlsx')

    x = []
    y = []
    for i in range(len(tweets_data)):
        if tweets_data[i]['id']==sent['id'][i]:
            x.append(tweets_data[i]['text'])
            y.append(sent['sentiment'][i])



    vectorizer = CountVectorizer(stop_words='english')
    train_features = vectorizer.fit_transform(x)

    actual = y[:-500]



    nb = MultinomialNB()
    nb.fit(train_features, [int(r) for r in y])

    test_features = vectorizer.transform(x[:-500])

    test_try= vectorizer.transform([text])
    test_predict = nb.predict(test_try)


    predictions = nb.predict(test_features)

    fpr, tpr, thresholds = metrics.roc_curve(actual, predictions, pos_label=1)

    return test_predict

