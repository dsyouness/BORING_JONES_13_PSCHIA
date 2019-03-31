import json
import pandas as pd
import matplotlib.pyplot as plt

tweets_data_path = 'tweetdata.txt'

tweets_data = []
tweets_file = open(tweets_data_path, "r")
for line in tweets_file:
    try:
        tweet = json.loads(line)
        tweets_data.append(tweet)
    except:
        continue

sent = pd.read_excel('sentiment2.xlsx')
print(sent.head())
print(sent['id'])
print(len(sent))

x = []
y = []
for i in range(len(tweets_data)):
    if tweets_data[i]['id']==sent['id'][i]:
        x.append(tweets_data[i]['text'])
        y.append(sent['sentiment'][i])

            
from sklearn.naive_bayes import MultinomialNB
from sklearn.feature_extraction.text import CountVectorizer
from sklearn import metrics

vectorizer = CountVectorizer(stop_words='english')
train_features = vectorizer.fit_transform(x)

actual = y[:-500]



nb = MultinomialNB()
nb.fit(train_features, [int(r) for r in y])

test_features = vectorizer.transform(x[:-500])

test_try= vectorizer.transform(["i'm going to travel next week, i will meet my family and i will enjoy with my friends"])
test_try2= vectorizer.transform(["I want to die depression sucks"])
predict2 = nb.predict(test_try)
predict3 = nb.predict(test_try2)

predictions = nb.predict(test_features)

fpr, tpr, thresholds = metrics.roc_curve(actual, predictions, pos_label=1)
print("Multinomial naive bayes AUC: {0}".format(metrics.auc(fpr, tpr)))

print(predict2)
print(predict3)


