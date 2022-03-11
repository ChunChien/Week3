<html>

<head>
    <meta name="keyword" content="墾丁三日遊">
    <title>M.M.LAB_墾丁趣</title>
    <!--(HTML註解這樣打)-->
    <link rel="icon" href="/img/ocean.png" type="image/x-icon" />


</head>

<!--
<body bgcolor="#000000">
-->

<?php

//頁面顏色
echo "<body bgcolor='#99CCFF'>";

?>

<a name="#top"></a>
<font color="white"><center><h1>墾丁三日遊</h1>
<h5>藍色海洋的召喚太強烈了，我走了。</h5></center></font>

<hr color="black" width="800/"/>

<p><b>行程內容</b></p>
<ul>
    <li><font color="#333399" size="4"><b><p>墾丁統一渡假村</b></font><br/>
    位於墾丁國家公園內，背倚鵝鑾山，前臨巴士海峽，鄰近鵝鑾鼻燈塔、龍坑生態保護區等景點。</p>

    </li>

    <li><font color="#333399" size="4"><b><p>國立海洋生物博物館</b></font><br/>
    屏東海生館是全台最大的國立海洋生物博物館，海生館介紹非常稀奇珍貴的魚類與精彩水底世界，</br>
    漫步墾丁海生館水藍色海底隧道，除了景色夢幻，更能看到許多可愛的小白鯨、企鵝、海豹喔！</p>
    </li>

    <li><font color="#333399" size="4"><b><p>萬里桐浮潛</b></font><br/>
    萬里桐可是潛水、浮潛清澈度最佳的海域，<br/>
    因為沒有水上活動設施的干擾，所以遊客可以近距離看見可愛的魚群，</br>
    到了傍晚這裡也可以看到西邊落下的夕陽，美麗又浪漫的拍照景點</p>
    </li>
</ul>

<a href="https://www.nmmba.gov.tw/" target="new"><img src="https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_9468/20190225091057_q1e4v/jpg"
 width="750"></img>
</a>

<a href="https://www.ktnp.gov.tw/News_Content2.aspx?n=28AB1D16ECF7E63C&sms=C88B5251F308CE96&s=335E99E46DC7832F" target="new">
    <img src="/img/ocean.jpg" width="500"></img>
</a>

<hr color="black" width="800/"/>

<!--建立表單-->
<form action="hello.php" method="post">
    <center><p>Name:<input type="text" name="userName" placeholder="您的大名"></p>
    <p>Email:<input type="email" name="email" placeholder="聯絡信箱"></p>
    <p>Phone:<input type="tel" name="tel" placeholder="聯絡電話"></p>
    <p>您的性別:<input type="radio" name="gender" value="male">男性<input type="radio" name="gender" value="female">女性<input type="radio" name="gender" value="other">其他</p>
    <p>飲食偏好:
    <br/><input type="checkbox" name="food" value="vagetable">素食
    <br/><input type="checkbox" name="food" value="meat">葷食
    <br/><input type="checkbox" name="food" value="egg">蛋過敏
    <br/><input type="checkbox" name="food" value="shrimp">蝦過敏
    
    <p>T-shirt size(可參考表格):<select name="T-shirt_size"><option>S</option><option>M</option><option>L</option><option>XL</option></select></p>
    <p>color:<input type="color" name="color"></p>
    <p>Ticket number:<input type="number" name="number"></p>
    <br/><input type="submit"><input type="reset"></p></center>

</form>
<hr color="black" width="800/"/>

<!--衣服尺寸表-->
<center><table border="1">
    <tr>
        <th></th><th>S</th><th>M</th><th>L</th><th>XL</th>
    </tr>
    <tr>
        <td>肩寬</td><td>42</td><td>44</td><td>46</td><td>48</td>
    </tr>
    <tr>
        <td>衣長</td><td>62</td><td>65</td><td>68</td><td>71</td>
    </tr>
    <tr>
        <td>胸寬</td><td>46</td><td>48</td><td>51</td><td>53</td>
    </tr>
</table></center>

<center><a href="#top">回頁首</a></center>
</p>


</body>


</html>