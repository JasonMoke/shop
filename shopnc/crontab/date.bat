	@echo off
mshta vbscript:createobject("wscript.shell").run("""iexplore"" http://v3./crontab/cj_index.php?act=date",0)(window.close) 
echo 1
taskkill /f /im iexplore.exe 