<!DOCTYPE html>
<html>
<head><title>Install FFmpeg at CentOS6 with php5.4</title></head>
<style>
*{margin:0px;padding:0px;border:0px;font-family:sans-serif;}
.code{font-family:courier;color:#999;border:1px solid #555;padding:10px;margin:10px;}
</style>
<body>
<h1>FFMPEG Auto Installer By Shekhar Suman</h1>
<p>To install ffmpeg at your server please run below command..</p>

<br /><br />
<p class="code">
yum update -y
yum install wget -y
wget --no-check-certificate "https://raw.githubusercontent.com/ShekharSumanPro/FFMPEGAutoInstaller/master/install-ffmpeg.sh" -O /root/install-ffmpeg.sh
cd /root
chmod +x install-ffmpeg.sh
./install-ffmpeg.sh  
  
  
<br /><br /> 
wget https://github.com/ShekharSumanPro/FFMPEGAutoInstaller/blob/master/ffmpeg.Shekhar<br />
sh ./ffmpeg.Shekhar
</p>
<br /><br />
Enjoy !!!
</body>
</html>
