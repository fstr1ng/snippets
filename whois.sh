#!/bin/bash

echo
echo 'Enter domain/IPa to whois; print "q" or press CTRL-C to exit'

while true; do
  echo
  echo -ne '\e[7mwhois:\e[0m '
  read user_input

  if [ $user_input = 'q' ]; then 
    break
  else 
    echo
    whois $user_input
  fi

done
