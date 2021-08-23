![LOGO](/img/logo_text.png)
 
## Inspiration

Over one-fourth of Canadians during their lifetimes will have to deal with water damage in their homes. This is an issue that causes many Canadians overwhelming stress from the sheer economical and residential implications. 

As an effort to assist and solve these very core issues, we have designed a solution that will allow for future leaks to be avoidable. Our prototype system made, composed of software and hardware will ensure house leaks are a thing of the past!

## What is our planned solution?
![breakdown](/img/breakdown.png)

To prevent leaks, we have designed a system of components that when functioning together, would allow the user to monitor the status of their plumbing systems. 

Our system is comprised of:
> 
Two types of leak detection hardware
- Acoustic leak detectors: monitors abnormal sounds of pipes.
- Water detection probes: monitors the presence of water in unwanted areas.

Our hardware components will have the ability to send data to a local network, to then be stored in the cloud.

> Software components
- Secure cloud to store vital information regarding pipe leakages.
- Future planned app/website with the ability to receive such information

## Business Aspect of Leakio

Standalone, this solution is profitable through the aspect of selling the specific hardware to consumers. Although for insurance companies, this is a vital solution that has the potential to save millions of dollars.

It is far more economical to prevent a leak, rather than fix it when it already happens. The time of paying the average cost of $10,900 US dollars to fix water damage or a freezing claim is now avoidable!

In addition to saved funds, our planned system will be able to send information to insurance companies for specific data purposes such as which houses or areas have the most leaks, or individual risk assessment. This would allow insurance companies to more appropriately create better rates for the consumer, for the benefit of both consumer and insurance company.

## Software
### Front End:
This includes our app design in Figma, which was crafted using knowledge on proper design and ratios. Specifically, we wanted to create an app design that looked simple but had all the complex features that would seem professional. This is something we are proud of, as we feel this component was successful.

![Figma](/img/figma.gif)

Back End:
PHP, MySQL, Python

## Hardware
### Electrical
- A custom PCB is designed from scratch using EAGLE
- Consists of USBC charging port, lithium battery charging circuit, ESP32, Water sensor connector, microphone connector
- The water sensor and microphone are extended from the PCB which is why they need a connector

### Custom Water Sensor
![DEMO](/img/demo.gif)

### 3D-model
- Hub contains all the electronics and the sensors
- Easy to install design and places the microphone within the walls close to the pipes
![render](/img/leakio_render.jpg)

## Challenges we ran into
Front-End:
There were many challenges we ran into, especially regarding some technical aspects of Figma. Although the most challenging aspect in this would’ve been the implementation of the design.
Figma Demo: 

Back-End:
This is where most challenges were faced, which includes the making of the acoustic leak detector, proper sound recognition, cloud development, and data transfer.

It was the first time any of us had used MySQL, and we created it on the Google Cloud SQL platform. We also had to use both Python and PHP to retrieve and send data, two languages we are not super familiar with. 

We also had no idea how to set up a neural network with PyTorch. Also finding the proper data that can be used to train has proven to be very difficult. 

## Accomplishments that we're proud of
- Learning a lot of new things within a fast period of time. 
- Creating functional proof-of-concepts

## What we learned
Google Cloud: 
Creating a MySQL database and setting up a Deep Learning VM.

MySQL:
Using MySQL and syntaxes, learning PHP.

Machine Learning:
How to set up Pytorch.

PCB Design:
Learning how to use EAGLE to design PCBs.

Raspberry Pi:
Autorun Python scripts and splitting .wav files.

Others:
Not to leave the recording to the last hour. It is hard to cut to 3 minutes with an explanation and demo. 

## What's next for Leakio
- Properly implement audio classification with Pytorth torchaudio
- Create possibly a network of devices in a single home
- Find more economical components
- Test on an ESP32