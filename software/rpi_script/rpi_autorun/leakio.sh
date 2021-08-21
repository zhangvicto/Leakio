#!/bin/bash

# cd /code/python/myapp
python3 /audio_capture.py >> /code/logs/myapp.log 2>&1

#code to input into rpi
#sudo chmod 744 /code/scripts/myapp.sh
#sudo chmod 664 /etc/systemd/system/myapp.service
#sudo systemctl daemon-reload
#sudo systemctl enable leakio.service
#sudo systemctl start leakio.service
#sudo systemctl start status.service
#tail -f /code/logs/myapp.log
#sudo systemctl stop myapp.service
#sudo reboot
