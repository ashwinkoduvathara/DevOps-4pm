#!/bin/bash

alert="\033[1;36m"
success="\033[1;32m"
warning="\033[1;33m"
error="\033[1;31m"
nocolour="\033[00m"
white_space="\r\033[K"

osname=$(hostnamectl |grep 'Operating System' | awk '{print$3,$4,$5}')
hostname=$(hostname)
private=$(ip addr show | grep 'inet ' | awk '{print $2}' | grep -v '127.0.0.1')
public=$( curl -s icanhazip.com )
ram_kb=$(sudo cat /proc/meminfo | grep 'MemTotal' | awk '{print$2}')
ram_mb=$((ram_kb / 1024))
ram_free_kb=$(cat /proc/meminfo | grep 'MemFree' | awk '{print$2}')
ram_free_mb=$((ram_free_kb / 1024))
storage=$(df -hT | grep '/dev/sda3' | awk '{print$3}')
used=$(df -hT | grep '/dev/sda3' | awk '{print$4}')
available=$(df -hT | grep '/dev/sda3' | awk '{print$5}')


echo -e $warning "SYSTEM RESOURCES" $nocolour
loading_message="loading system resources "

for ((i=0; i<${#loading_message}; i++)); do
    echo -n "${loading_message:$i:1}"
    sleep 0.08
done
echo -en $white_space
echo -e $success OS Name :$nocolour $osname
echo -e $success Hostname :$nocolour $hostname
echo -e $success Private IP :$nocolour $private
echo -e $success Public IP :$nocolour $public
echo -e $success Total RAM :$nocolour $ram_mb MB
echo -e $success RAM Free :$nocolour $ram_free_mb MB
echo -e $success Total Storage :$nocolour $storage
echo -e $success Used Space :$nocolour $used
echo -e $success Available Space :$nocolour $available