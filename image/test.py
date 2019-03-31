from __future__ import print_function
import numpy as np

# get the data
filname = 'fer2013.csv'
label_map = ['Anger', 'Disgust', 'Fear', 'Happy', 'Sad', 'Surprise', 'Neutral']

def getData(filname):
    # images are 48x48
    # N = 35887
    Y = []
    X = []
    first = True
    for line in open(filname):
        if first:
            first = False
        else:
            row = line.split(',')
            Y.append(int(row[0]))
            X.append([int(p) for p in row[1].split()])

    X, Y = np.array(X) / 255.0, np.array(Y)
    return X, Y


X, Y = getData(filname)
num_class = len(set(Y))

# To see number of training data point available for each label
def balance_class(Y):
    num_class = set(Y)
    count_class = {}
    for i in range(len(num_class)):
        count_class[i] = sum([1 for y in Y if y == i])
    return count_class

balance = balance_class(Y)

# keras with tensorflow backend
N, D = X.shape
X = X.reshape(N, 48, 48, 1)

# Split in  training set : validation set :  testing set in 80:10:10
from sklearn.model_selection import train_test_split

X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.5, random_state=-1)
y_train = (np.arange(num_class) == y_train[:, None]).astype(np.float32)