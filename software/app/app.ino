//Sensor Pin
const int sensorPin = 35;

//Smoothing vars
const int numReadings = 2;
int readings[numReadings];
int readIndex = 0;
int total = 0;
int average = 0;

void setup() {
  //Serial
  Serial.begin(112500);

  //Initializing all readings
  for (int thisReading = 0; thisReading < numReadings; thisReading++) {
    readings[thisReading] = 0;
  }
}

void loop() {
  total = total - readings[readIndex];
  readings[readIndex] = analogRead(sensorPin);
  total = total + readings[readIndex];
  readIndex = readIndex + 1;

  if (readIndex >= numReadings) {
    readIndex = 0;
  }

  // calculate the average:
  average = total / numReadings;

  int currentTime = 0;
  int interval = 2000; //ms
  int pastTime = 0;
  int count = 0;

  currentTime = millis();

  if (currentTime - pastTime >= interval) {
    if (average == 0) {
      Serial.println("Leak detected!");
      count++;
    } else {
      Serial.println("Normal");
      count--;
    }

    if (count > 5) {
      Serial.println("There is a leak, please seek help to prevent further damage.");
    } else {
      pastTime = currentTime;
    }
    
  }
}
