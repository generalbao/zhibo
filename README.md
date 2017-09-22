# zhibo
nginx-rtmp打造直播
2017年9月22日18:34:02

windows推流软件 obs
ckplayer 在线直播
哔哩哔哩 flv.js播放 直播后保存的flv文件
swoole弹幕其他功能(未完成)

文件夹描述
ckplayer 在线直播
flvjs 播放flv文件
hls 用户推流生成的xx.m3u8和许多 ts文件
record 保存录制用户推流的数据


publish.php 用户推流会执行该文件 如果返回200状态码,继续推流，如果其他状态码，会报错,可做推流权限控制
publish_done.php 用户完成推流会执行该文件
play.php 用户点播会执行该文件
log.txt 当用户操作时候,可以选择记录(可选)

可以参考视频直播点播nginx-rtmp开发手册中文版http://blog.csdn.net/kevinw9/article/details/52984826

可以参考本人博客 http://www.918dxs.com/blog.php?type=5