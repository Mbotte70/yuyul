<?php
date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m"; 
/* END COLOR */

$pass = "MBOTTE 07";
$read = file_get_contents("key.txt");
system('clear');
echo $baner = "
\033[1;31mWELLCOME TO MY SCRIPT
\033[1;32m
@@@@@@@@@@@  @@@@@@@    @@@@@@   @@@@@@@  @@@@@@@  @@@@@@@@  
@@@@@@@@@@@  @@@@@@@@  @@@@@@@@  @@@@@@@  @@@@@@@  @@@@@@@@  
@@! @@! @@!  @@!  @@@  @@!  @@@    @@!      @@!    @@!       
!@! !@! !@!  !@   @!@  !@!  @!@    !@!      !@!    !@!       
@!! !!@ @!@  @!@!@!@   @!@  !@!    @!!      @!!    @!!!:!    
!@!   ! !@!  !!!@!!!!  !@!  !!!    !!!      !!!    !!!!!:    
!!:     !!:  !!:  !!!  !!:  !!!    !!:      !!:    !!:       
:!:     :!:  :!:  !:!  :!:  !:!    :!:      :!:    :!:       
:::     ::   ::  ::::  ::::  ::    ::       ::     :: ::::  
 :      :    :: : ::    : :  :      :        :     : :: ::   
                                                     \033[1;31m OFFICIAL\n";

if ($pass == 'no'){
      echo $red2."Script Sudah Di Off Kan\n";
      exit;                                                       
}else{
if($read == $pass){
      echo $green2." •Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      echo $putih2." •\n\n";
      $save = fopen("key.txt", "w");

echo $putih2." •MASUKAN PASSWORD : ".$red2;
$p = trim(fgets(STDIN));

echo $putih2." Please Wait$red2 \r";
sleep(1);
echo $putih2." Please Wait$red2      01\r";
sleep(1);
echo $putih2." Please Wait$red2      02\r";
sleep(1);
echo $putih2." Please Wait$red2      03\r";
sleep(1);
echo $putih2." Please Wait$red2      04\r";
sleep(1);
echo $putih2." Please Wait$red2      05\r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo $green2."\n •LOGIN BERHASIL\n";
        fclose($save);
        sleep(2);
        echo  " •JANGAN LUPA SEDEKAH  KE SAYA\n";
        sleep(3);
        }else{
        echo $red2." •LOGIN GAGAL, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}

system("clear");
echo $red2."";
system("toilet --width 70 -f pagga -F border  'RECEHAN'");
echo $yellow2.$baner1 = " $green2 SERVER ON
\033[1;33m
@@@@@@@@@@@  @@@@@@@    @@@@@@   @@@@@@@  @@@@@@@  @@@@@@@@  
@@@@@@@@@@@  @@@@@@@@  @@@@@@@@  @@@@@@@  @@@@@@@  @@@@@@@@  
@@! @@! @@!  @@!  @@@  @@!  @@@    @@!      @@!    @@!       
!@! !@! !@!  !@   @!@  !@!  @!@    !@!      !@!    !@!       
@!! !!@ @!@  @!@!@!@   @!@  !@!    @!!      @!!    @!!!:!    
!@!     !@!  !!!@!!!!  !@!  !!!    !!!      !!!    !!!!!:    
!!:     !!:  !!:  !!!  !!:  !!!    !!:      !!:    !!:       
:!:     :!:  :!:  !:!  :!:  !:!    :!:      :!:    :!:       
:::     ::   ::  ::::  :::   ::    ::       ::     :: ::::
 :      :    :: : ::    : :  :      :        :     : :: ::   \033[1;37m \033[1;31m  ";
echo $putih2."                DATE ".$green2.date("d.m.Y ").$putih2."   TIME ".$green2.date("H:i:s")."\n";
echo " ===============================\033[1;31m404\033[1;32m===============================";
echo $baner2 = "
$putih2 •Creator        :$green2 MBOTTE
$putih2 •Support By     :$green2 PARA TUYUL
$putih2 •Group Tele     :$green2 @diskusiapk
$putih2 •WhatsApp       :$green2 081310049698
$putih2 •Donation       :$green2 SEIKHLAS NYA....!!!
$putih2 =================================================================
$yellow2 •LEMOT LEMOT LEMOT $green2 TAPI LEGIT $green2 GASSSSS
 •================================================================\n";
echo $blue2." •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";

include"cfg.php";
$ua = array(
"Accept: application/json, text/javascript, */*; q=0.01",
"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 10; CPH1823) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Cookie: ".$Cookie,
"Origin: http://app6.a123456b.com",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,zh-CN;q=0.6,zh;q=0.5");

echo "\033[1;37m[\033[1;31m1\033[1;37m]$red2 Mode$green2 Registrasi\n";
echo "\033[1;37m[\033[1;31m2\033[1;37m]$red2 Mode$green2 Play Claim\n";
echo "$red2 •\033[1;37mInput Pilihan : ".$red2;
$md = trim(fgets(STDIN));
echo "\n";
//echo " •Input Cookie : ".$red2;
//$ck = trim(fgets(STDIN));

if ($md=="1"){
echo "$red2 •\033[1;37mInput No Hp    : ".$red2;
$HP = trim(fgets(STDIN));
echo "$red2 •\033[1;37mInput Nickname : ".$red2;
$nm = trim(fgets(STDIN));
echo "$red2 •\033[1;37mInput Password : ".$red2;
$pass = trim(fgets(STDIN));
//echo "$red2 •\033[1;37mInput Code Ref : ".$red2;
//$cr = trim(fgets(STDIN));
echo "\n";

include"cfg.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Public/reg.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$dato = "username=".$HP."&nickname=".$nm."&password=".$pass."&repassword=".$pass."&invite_code=".$cr;
curl_setopt($ch, CURLOPT_POSTFIELDS, $dato);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$reg = fetch_value($res,'"info":"','"');
echo " ".$green2.$reg."\n\n";
//echo $res."\n";

//echo "$red2 •\033[1;37mKlik Enter Untuk Mulai Ulang : ".$red2;
//$ck = trim(fgets(STDIN));
//system("php bot.php");
//echo "\n";
}
//exit;
if ($md=="2"){
echo "$red2 •\033[1;37mInput No Hp    : ".$red2;
$HP = trim(fgets(STDIN));
//echo "$red2 •\033[1;37mInput Nickname : ".$red2;
//$nm = trim(fgets(STDIN));
echo "$red2 •\033[1;37mInput Password : ".$red2;
$pass = trim(fgets(STDIN));
echo "$red2 •\033[1;37mInput Cookie   : ".$red2;
$ck = trim(fgets(STDIN));
echo "\n";

system("clear");
echo $green2."";
system("toilet --width 70 -f pagga -F border  'RECEH'");
echo $red2.$baner1;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Public/login.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "username=".$HP."&password=".$pass;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$lg = fetch_value($res,'"info":"','"');
echo " ".$green2.$lg."\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Member/index.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$a = explode("<p class='tilte2' >",$res);
$a1= explode("<",$a[1]);
echo $putih2." Akun ".$green2.$a1[0]."  ";
$b = explode("<p class='idid'>",$res);
$b1= explode("<",$b[1]);
echo " ".$red2.$b1[0]."\n";
$c = explode('<p class="meme_user_xx">',$res);
$c1= explode('<',$c[1]);
echo $putih2." Keuntungan Misi     : ".$green2."Rp ".$c1[0]."\n";
$d = explode('<p class="meme_user_xx">',$res);
$d1= explode('<',$d[2]);
echo $putih2." Saldo Tersedia      : ".$green2."Ro ".$d1[0]."\n";
$e = explode('<p class="meme_user_xx">',$res);
$e1= explode('<',$e[3]);
echo $putih2." Keuntungan Hari Ini : ".$green2."Rp ".$e1[0]."\n";
$f = explode('<p class="meme_user_xx">',$res);
$f1= explode('<',$f[4]);
echo $putih2." Sisa Misi           : ".$green2.$f1[0]."\n";
$g = explode('<p class="meme_user_xx">',$res);
$g1= explode('<',$g[5]);
echo $putih2." Bonus Tim           : ".$green2."Rp ".$g1[0]."\n";
$h = explode('<p class="meme_user_xx">',$res);
$h1= explode('<',$h[6]);
echo $putih2." Total Refferal      : ".$green2.$h1[0]."\n\n";

while("true"){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Task/lists_lb.html?lb=3");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data2 = "r=ajax&page=1&tlb=&pd=0";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$a = explode('<p class="renwu_xq_dj">',$res);
$a1= explode('<',$a[1]);
echo "\r ".$green2.$a1[0]."                           \n";
$b = explode('Kwantitas misi:<span>',$res);
$b1= explode('<',$b[1]);
echo $putih2." Kwantitas Misi ".$green2.$b1[0]." ";
$c = explode("data-id='",$res);
$id= explode("'",$c[1]);
//echo " Kwantitas Misi ".$b1[0]."\n";
$d = explode("apply-id=''>",$res);
$d1= explode("<",$d[1]);
echo " ".$d1[0]."\n";
//echo " ".$id[0]."\n";

//exit;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Task/get_task.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data3 = "id=".$id[0];
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$cd1 = fetch_value($res,'"info":"','"');
echo " ".$red2.$cd1."\n";
//exit;


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Task/submission_task_do.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data4 = "id=".$cd1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$st1 = fetch_value($res,'"info":"','"');
echo " ".$putih2.$st1."\n";

if ($st1=="Tidak ada izin"){
echo " CEK DI WEB. SELESAIKAN MISI DULU\n";
exit;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Task/lists_lb/lb/3.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$ms = explode('Misi yang bisa dilakukan:<b>',$res);
$ms1= explode("<",$ms[1]);
//echo " Misi ".$pp1[0]."\n";
echo $putih2." Sisa Misi ".$green2.$ms1[0]."\n\n";

if ($ms1[0]=="0"){
echo $red2." MISI SUDAH SELESAI\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app6.a123456b.com/index.php/Home/Member/index.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);                        
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$a = explode("<p class='tilte2' >",$res);
$a1= explode("<",$a[1]);
echo "$yellow2 Akun ".$a1[0]."  ";                                        
$b = explode("<p class='idid'>",$res);
$b1= explode("<",$b[1]);
echo " ".$b1[0]."\n";
$c = explode('<p class="meme_user_xx">',$res);
$c1= explode('<',$c[1]);
echo $green2." Keuntungan Misi     : "."Rp ".$c1[0]."\n";
$d = explode('<p class="meme_user_xx">',$res);                    
$d1= explode('<',$d[2]);
echo $green2." Saldo Tersedia      : "."Ro ".$d1[0]."\n";                 
$e = explode('<p class="meme_user_xx">',$res);
$e1= explode('<',$e[3]);                                          
echo $green2." Keuntungan Hari Ini : "."Rp ".$e1[0]."\n";
$f = explode('<p class="meme_user_xx">',$res);                    
$f1= explode('<',$f[4]);
echo $green2." Sisa Misi           : ".$f1[0]."\n";
$g = explode('<p class="meme_user_xx">',$res);
$g1= explode('<',$g[5]);
echo $green2." Bonus Tim           : "."Rp ".$g1[0]."\n";
$h = explode('<p class="meme_user_xx">',$res);
$h1= explode('<',$h[6]);
echo $green2." Total Refferal      : ".$h1[0]."\n\n";

exit;
}

//MENUNGGU
for ($x=10;$x>0;$x--){
echo "\r \r";
echo "\r"." 🔴 ".$yellow2."Daget Daget ".$red2."$x".$yellow2." Detik ";
sleep(1);
}

}
}
