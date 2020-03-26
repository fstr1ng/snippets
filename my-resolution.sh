help_text="Become root user first.
Run script with "source" and required x/y dimensions as args:
  source my-resolution.sh 1024 968
If no values passed, resolution will be set to 952x1002 (good for 1920x1080 host)
If mode fits your screen, run script with 'save' argument
to permanently save it to xorg config:
  source my-resolution.sh save"

if [ "$1" = "set" ]; then
  if [ -z "$2" ]; then
    X="952"
    Y="1002"
  elif [ ! -z "$2" ] && [ ! -z "$3" ]; then
    X=$2
    Y=$3
  else
    echo "You must provide exacly 0 or 2 args to 'set' command"
  fi
fi

if [ ! -z "$X" ] && [ ! -z "$Y" ]; then
  modeline=$(cvt $X $Y | tail -n 1 | cut -d ' ' -f 2-)
  modename=$(echo $modeline | cut -d " " -f -1)
  screen=$(xrandr | head -n 1 | cut -d ":" -f 1)
  monitor=$(xrandr | grep " connected" | cut -d ' ' -f -1)
  echo $modeline
  echo $monitor
  echo $screen
  #xrandr --newmode $modeline
  #xrandr --addmode $monitor $modename
  #xrandr --output $monitor --mode $modename
  unset X Y
fi

if [ "$1" = "save" ]; then
  mkdir /etc/X11/xorg.conf.d 2>/dev/null
  cat << EOF > /etc/X11/xorg.conf.d/10-monitor.conf
Section "Monitor"
    Identifier "$monitor"
    Modeline $modeline
    Option "PreferredMode" $modename
EndSection
Section "Screen"
    Identifier "$screen"
    Monitor "$monitor"
    DefaultDepth 24
    SubSection "Display"
        Modes $modename
    EndSubSection
EndSection
EOF
elif [ "$#" -eq 0 ]; then
  echo "$help_text"
fi
