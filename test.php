<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>J-HAQ身体機</title>
</head>
<body>

<h2>J-HAQ身体機能障害指数 計算機</h2>

<p>
<?php
echo "アクセス日時:";
echo date("Y/m/d H:i:s", time()) . "\n";
?>
</p>
<?php   $aa = '';
        $ab = '';
        $ah = '';
        $a  = '';
        $ba = '';
        $bb = '';
        $bh = '';
        $b  = '';
        $ca = '';
        $cb = '';
        $cc = '';
        $ch = '';
        $c  = '';
        $da = '';
        $db = '';
        $dh = '';
        $d  = '';
        $ea = '';
        $eb = '';
        $ec = '';
        $eh = '';
        $e  = '';
        $fa = '';
        $fb = '';
        $fh = '';
        $f  = '';
        $ga = '';
        $gb = '';
        $gc = '';
        $gh = '';
        $g  = '';
        $ha = '';
        $hb = '';
        $hc = '';
        $hh = '';
        $h  = '';
        $j  = '';

        $aa = $_POST['aa'];
        $ab = $_POST['ab'];
        $ah = $_POST['ah'];
        $ba = $_POST['ba'];
        $bb = $_POST['bb'];
        $bh = $_POST['bh'];
        $ca = $_POST['ca'];
        $cb = $_POST['cb'];
        $cc = $_POST['cc'];
        $ch = $_POST['ch'];
        $da = $_POST['da'];
        $db = $_POST['db'];
        $dh = $_POST['dh'];
        $ea = $_POST['ea'];
        $eb = $_POST['eb'];
        $ec = $_POST['ec'];
        $eh = $_POST['eh'];
        $fa = $_POST['fa'];
        $fb = $_POST['fb'];
        $fh = $_POST['fh'];
        $ga = $_POST['ga'];
        $gb = $_POST['gb'];
        $gc = $_POST['gc'];
        $gh = $_POST['gh'];
        $ha = $_POST['ha'];
        $hb = $_POST['hb'];
        $hc = $_POST['hc'];
        $hh = $_POST['hh'];
        
        // echo "$aa";
        // echo "$ab";
        // echo "$ah";
    //1問目    
        if (1 == $ah){
            if(2 > $aa){
                $aa=2;
                }
            else if (2 > $ab){
                $ab=2;
            }
        }
        if ($aa >= $ab){
            $a=$aa;
        }
        else if($ab > $aa){
            $a=$ab;
        }
        echo "$a\n";
    //2問目    
        if (1 == $bh){
            if(2 > $ba){
                $ba=2;
                }
            else if (2 > $bb){
                $bb=2;
            }
        }
        if ($ba >= $bb){
            $b=$ba;
        }
        else if($bb > $ba){
            $b=$bb;
        }
        echo "$b\n";
    //3問目
        if (1 == $ch){
            if(2 > $ca){
                $ca=2;
                }
            else if (2 > $cb){
                $cb=2;
            }
            else if (2 > $cc){
                $cc=2;
            }
        }
      if($ca>=$cb && $ca>=$cc){
          $c=$ca;
      }
      else if ($cb>$ca && $cb>$cc) {
          $c=$cb;
      }
      else if ($cc>$ca && $cc>$cb){
          $c=$cc;
      }
        echo "$c\n";
    //4問目
    if (1 == $dh){
            if(2 > $da){
                $da=2;
                }
            else if (2 > $db){
                $db=2;
            }
        }
        if ($da >= $db){
            $d=$da;
        }
        else if($db > $da){
            $d=$db;
        }
        echo "$d\n";
    //5問目
     if (1 == $eh){
            if(2 > $ea){
                $ea=2;
                }
            else if (2 > $eb){
                $eb=2;
            }
            else if (2 > $ec){
                $ec=2;
            }
        }
      if($ea>=$eb && $ea>=$ec){
          $e=$ea;
      }
      else if ($eb>$ea && $eb>$ec) {
          $e=$eb;
      }
      else if ($ec>$ea && $ec>$eb){
          $e=$ec;
      }
        echo "$e\n";
    //6問目
    if (1 == $fh){
            if(2 > $fa){
                $fa=2;
                }
            else if (2 > $fb){
                $fb=2;
            }
        }
        if ($fa >= $fb){
            $f=$fa;
        }
        else if($fb > $fa){
            $f=$fb;
        }
        echo "$f\n";
    //7問目
     if (1 == $gh){
            if(2 > $ga){
                $ga=2;
                }
            else if (2 > $gb){
                $gb=2;
            }
            else if (2 > $gc){
                $gc=2;
            }
        }
      if($ga>=$gb && $ga>=$gc){
          $g=$ga;
      }
      else if ($gb>$ga && $gb>$gc) {
          $g=$gb;
      }
      else if ($gc>$ga && $gc>$gb){
          $g=$gc;
      }
        echo "$g\n";
    //8問目
     if (1 == $hh){
            if(2 > $ha){
                $ha=2;
                }
            else if (2 > $hb){
                $hb=2;
            }
            else if (2 > $hc){
                $hc=2;
            }
        }
      if($ha>=$hb && $ha>=$hc){
          $h=$ha;
      }
      else if ($hb>$ha && $hb>$hc) {
          $h=$hb;
      }
      else if ($hc>$ha && $hc>$hb){
          $h=$hc;
      }
        echo "$h\n";
        
        //計算式
        $j=($a+$b+$c+$d+$e+$f+$g+$h)/8;
        echo 'あなたのJ-HAQスコアは';
        echo "$j";
?>

<p>★この１週間の日常生活で、それぞれの質問に当てはまるところに１つだけ、選択してください。<br>必ず全て回答してください。</p>
<p><br><br>下記の①-④の選択肢で下記の1.-7.の器具や自助具を日常的に使っていたり、他人の手助けが必要であれば、"問題◯では補助を利用"にチェックをつけてください</p>
<p>１. 身支度に使う器具（ボタン通し、ジッパーにかけるひもなど）２. 特殊な椅子　３. 特別な器具、自助具　4. ステッキ ５. 松葉杖 ６. 歩行器　７. 車いす<br><br><br><br></p>

<p>① 衣服の着脱と身支度（Dressing）</p>
<p>靴ひもを結び、ボタン掛けも含め自分で身支度ができますか?</p>

<form action="" method="POST">
    <input type="radio" name="aa" value="0"> なんの困難もなくできる
    <input type="radio" name="aa" value="1"> 少し困難だができる　
    <input type="radio" name="aa" value="2"> かなり困難だができる　
    <input type="radio" name="aa" value="3"> まったくできない　


<p>自分で洗髪ができますが?</p>

    <input type="radio" name="ab" value="0"> なんの困難もなくできる
    <input type="radio" name="ab" value="1"> 少し困難だができる　
    <input type="radio" name="ab" value="2"> かなり困難だができる　
    <input type="radio" name="ab" value="3"> まったくできない<br><br>　
    <input type='checkbox' name='ah' value='1'>問題①では補助を利用<br><br><br><br>




<p>② 起立（Arising）</p>
<p>椅子（肘かけがなく背もたれが垂直）から立ち上がれますか?</p>

    <input type="radio" name="ba" value="0"> なんの困難もなくできる
    <input type="radio" name="ba" value="1"> 少し困難だができる　
    <input type="radio" name="ba" value="2"> かなり困難だができる　
    <input type="radio" name="ba" value="3"> まったくできない　　


<p>ベッドまたは布団からの就寝、起床の動作ができますか?</p>
<p>（日常使っている寝具につきお答えください）</p>

    <input type="radio" name="bb" value="0"> なんの困難もなくできる
    <input type="radio" name="bb" value="1"> 少し困難だができる　
    <input type="radio" name="bb" value="2"> かなり困難だができる　
    <input type="radio" name="bb" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='bh' value='1'>問題②では補助を利用<br><br><br><br>


<p>③ 食事（Eating）</p>
<p>お箸を使ってごはんを口に運べますか?</p>

    <input type="radio" name="ca" value="0"> なんの困難もなくできる
    <input type="radio" name="ca" value="1"> 少し困難だができる　
    <input type="radio" name="ca" value="2"> かなり困難だができる　
    <input type="radio" name="ca" value="3"> まったくできない　　


<p>いっぱい水の入ったコップを口元まで運べますか?</p>

    <input type="radio" name="cb" value="0"> なんの困難もなくできる
    <input type="radio" name="cb" value="1"> 少し困難だができる　
    <input type="radio" name="cb" value="2"> かなり困難だができる　
    <input type="radio" name="cb" value="3"> まったくできない　　


<p>新しい牛乳の紙パックの口を開けることができますか?</p>

    <input type="radio" name="cc" value="0"> なんの困難もなくできる
    <input type="radio" name="cc" value="1"> 少し困難だができる　
    <input type="radio" name="cc" value="2"> かなり困難だができる　
    <input type="radio" name="cc" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='ch' value='1'>問題③では補助を利用<br><br><br><br>


<p>④ 歩行（Walking）</p>
<p>戸外の平坦な道を歩けますか?</p>

    <input type="radio" name="da" value="0"> なんの困難もなくできる
    <input type="radio" name="da" value="1"> 少し困難だができる　
    <input type="radio" name="da" value="2"> かなり困難だができる　
    <input type="radio" name="da" value="3"> まったくできない　　


<p>階段を５段上がれますか?</p>

    <input type="radio" name="db" value="0"> なんの困難もなくできる
    <input type="radio" name="db" value="1"> 少し困難だができる　
    <input type="radio" name="db" value="2"> かなり困難だができる　
    <input type="radio" name="db" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='dh' value='1'>問題④では補助を利用<br><br><br><br>






<p>◎下記の⑤-⑧の選択肢で下記の1.-6.の器具や自助具を日常的に使っていたり、他人の手助けが必要であれば、"問題◯では補助を利用"にチェックをつけてください</p>
<p>１. 浴槽のいす ２. 浴槽の手すり ３. 便座を高くした ４. トイレ内の手すり ５. 孫の手状の継ぎ手（マジックハンド）６. ビンの口を開ける器具<br><br><br><br></p>


<p>⑤ 衛生（Hygiene）</p>
<p>浴槽につかることができますか?</p>

    <input type="radio" name="ea" value="0"> なんの困難もなくできる
    <input type="radio" name="ea" value="1"> 少し困難だができる　
    <input type="radio" name="ea" value="2"> かなり困難だができる　
    <input type="radio" name="ea" value="3"> まったくできない　　


<p>体を洗いタオルで拭くことができますか?</p>

    <input type="radio" name="eb" value="0"> なんの困難もなくできる
    <input type="radio" name="eb" value="1"> 少し困難だができる　
    <input type="radio" name="eb" value="2"> かなり困難だができる　
    <input type="radio" name="eb" value="3"> まったくできない　　


<p>洋式トイレに座ったり立ったりできますか?</p>

    <input type="radio" name="ec" value="0"> なんの困難もなくできる
    <input type="radio" name="ec" value="1"> 少し困難だができる　
    <input type="radio" name="ec" value="2"> かなり困難だができる　
    <input type="radio" name="ec" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='eh' value='1'>問題⑤では補助を利用<br><br><br><br>


<p>⑥ とどく範囲（Reach）</p>
<p>頭上の棚に２リットル入りのペットボトルがあった場合、<br>それを下に降ろせますか?</p>

    <input type="radio" name="fa" value="0"> なんの困難もなくできる
    <input type="radio" name="fa" value="1"> 少し困難だができる　
    <input type="radio" name="fa" value="2"> かなり困難だができる　
    <input type="radio" name="fa" value="3"> まったくできない　　


<p>腰を曲げて床にある衣服を拾い上げられますか?</p>

    <input type="radio" name="fb" value="0"> なんの困難もなくできる
    <input type="radio" name="fb" value="1"> 少し困難だができる　
    <input type="radio" name="fb" value="2"> かなり困難だができる　
    <input type="radio" name="fb" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='fh' value='1'>問題⑥では補助を利用<br><br><br><br>




<p>⑦ 握力（Grip）</p>
<p>自動車のドアを開けられますか?</p>

    <input type="radio" name="ga" value="0"> なんの困難もなくできる
    <input type="radio" name="ga" value="1"> 少し困難だができる　
    <input type="radio" name="ga" value="2"> かなり困難だができる　
    <input type="radio" name="ga" value="3"> まったくできない　　


<p>広口ビンのふたを開けられますか?（すでに一度開けてあるもの）</p>

    <input type="radio" name="gb" value="0"> なんの困難もなくできる
    <input type="radio" name="gb" value="1"> 少し困難だができる　
    <input type="radio" name="gb" value="2"> かなり困難だができる　
    <input type="radio" name="gb" value="3"> まったくできない　　


<p>回転式の蛇口を開閉できますか?</p>

    <input type="radio" name="gc" value="0"> なんの困難もなくできる
    <input type="radio" name="gc" value="1"> 少し困難だができる　
    <input type="radio" name="gc" value="2"> かなり困難だができる　
    <input type="radio" name="gc" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='gh' value='1'>問題⑦では補助を利用<br><br><br><br>


<p>⑧ 家事や雑用（Activities）</p>
<p>用事や買い物にでかけることができますか?</p>

    <input type="radio" name="ha" value="0"> なんの困難もなくできる
    <input type="radio" name="ha" value="1"> 少し困難だができる　
    <input type="radio" name="ha" value="2"> かなり困難だができる　
    <input type="radio" name="ha" value="3"> まったくできない　　


<p>自動車の乗り降りができますか?</p>

    <input type="radio" name="hb" value="0"> なんの困難もなくできる
    <input type="radio" name="hb" value="1"> 少し困難だができる　
    <input type="radio" name="hb" value="2"> かなり困難だができる　
    <input type="radio" name="hb" value="3"> まったくできない　　


<p>そうじ機をかけたり、庭仕事などの家事ができますか?</p>

    <input type="radio" name="hc" value="0"> なんの困難もなくできる
    <input type="radio" name="hc" value="1"> 少し困難だができる　
    <input type="radio" name="hc" value="2"> かなり困難だができる　
    <input type="radio" name="hc" value="3"> まったくできない<br>　<br>　
    <input type='checkbox' name='hh' value='1'>問題⑧では補助を利用<br><br><br><br>



<input type="submit" value="送信" >
</form>

</body>
</html>