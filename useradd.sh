#!/bin/bash

for user in `cat users.txt`;
do
sudo adduser $user sudo;
echo -e "Linux4Ever\nLinux4Ever" | passwd $user;
done
