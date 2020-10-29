<?php
	//開始檔案作為讀取
	$fp = fopen("counter.txt", "r") or die("unable to open the file");
	//讀取目前檔案的內容，也就是目前的人次
	$counter = fread($fp, filesize("counter.txt"));
	//關檔，$fp是檔案指標，可以自行命名，它是之後存取該檔案的指標
	fclose($fp);

	echo "瀏覽：";
	echo $counter;
	echo "人次";
	$counter ++; //把目前的數字內容加1
	//開啟檔案作為寫入
	$fp = fopen("counter.txt", "w") or die("unable to open the file");
	//把$counter變數的內容，以文字檔的型式儲存到檔案中
	fwrite($fp, $counter);
	//關檔
	fclose($fp);

	//單純讀文字檔用法
	// echo "本網站參觀人次：";
	// readfile("counter.txt");
	// echo "人次！";
?>