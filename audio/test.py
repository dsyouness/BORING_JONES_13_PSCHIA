import speech_recognition as sr
import text.analysis as tx



def analysis(audio):
    r = sr.Recognizer()

    harvard = sr.AudioFile(audio)
    with harvard as source:
        audio = r.record(source)

    text =r.recognize_google(audio)
    result = tx.analyse_text(text)
    return result



print(analysis('exemple_positive.wav'))









