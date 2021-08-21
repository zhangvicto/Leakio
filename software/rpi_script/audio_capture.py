import pyaudio
import wave

filename = "sample.wav"

chunk = 1024

FORMAT = pyaudio.paInt16
channels = 2
sample_rate = 44100
record_seconds = 10
p = pyaudio.PyAudio()

stream = p.open(format=FORMAT,
                channels=channels,
                rate=sample_rate,
                input=True,
                output=True,
                frames_per_buffer=chunk)
frames = []
print("Recording...")
for i in range(int(44100 / chunk * record_seconds)):
    data = stream.read(chunk)
    frames.append(data)
print("Finished recording.")

stream.stop_stream()
stream.close()

p.terminate()

wf = wave.open(filename, "wb")

wf.setnchannels(channels)

wf.setsampwidth(p.get_sample_size(FORMAT))

wf.setframerate(sample_rate)

wf.writeframes(b"".join(frames))

wf.close()