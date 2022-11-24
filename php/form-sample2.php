<!DOCTYPE html>
<html>
  <head>
    <title>サンプルフォーム</title>
    <link rel="stylesheet" href="./form.css">
    <style>
      body {
        background-color: rgb(0, 187, 255);
      }
      .box {
        background-color: white;
        padding: 50px;
        width: 600px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
      }
      .form-item {
        display: flex;
      }
      .question, .answer {
        flex: 1;
      }
      .answer {
        padding: 1rem;
      }

      
/* solid020 */
.button_solid020 a {
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 240px;
    padding: 10px 25px 10px 60px;
    color: #FFF;
    transition: 0.3s ease-in-out;
    font-weight: 600;
    background: #6bb6ff;
    filter: drop-shadow(0px 2px 4px #ccc);
    border-radius: 1px;
}
.button_solid020 a:before {
    content: "";
    width: 30px;
    height: 90%;
    position: absolute;
    background: #FFF;
    left: 14px;
    top: -1px;
    clip-path: polygon(100% 0%, 100% 100%, 50% 75%, 0 100%, 0 0);
}
.button_solid020 a:after {
    font-family: "Font Awesome 5 Free";
    content: "\f7d9";
    position: absolute;
    left: 20px;
    top: 7%;
    color: #6bb6ff;
}
.button_solid020 a:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgb(0 0 0 / 15%), 0 0 5px rgb(0 0 0 / 10%);
}

    </style>
  </head>
  <body>

    <div class="box">
      <h1>
        <?php echo '心理テスト' ?>
      </h1>
      <p>
        <?php
        $p_word = 'あなたの心理を調べます';
        echo $p_word;
        ?>
      </p>

      <form action='form-answer.php' method='post'>

        <?php
        $items = [
          [
          'q' => '質問１',
          'ask' => '周りを気にする方だ',
          'check_box1' => 'はい',
          'check_box2' => 'どちらかといえばはい',
          'check_box3' => 'どちらともない',
          'check_box4' => 'どちらかといえばいいえ',
          'check_box5' => 'いいえ',
          ],
          [
          'q' => '質問２',
          'ask' => '相手の間違いを指摘できる方だ',
          'check_box1' => 'はい',
          'check_box2' => 'どちらかといえばはい',
          'check_box3' => 'どちらともない',
          'check_box4' => 'どちらかといえばいいえ',
          'check_box5' => 'いいえ',
          ],
          [
          'q' => '質問３',
          'ask' => '真面目な正確な方だ',
          'check_box1' => 'はい',
          'check_box2' => 'どちらかといえばはい',
          'check_box3' => 'どちらともない',
          'check_box4' => 'どちらかといえばいいえ',
          'check_box5' => 'いいえ',
          ],
          [
          'q' => '質問４',
          'ask' => '家族を大切にする方だ',
          'check_box1' => 'はい',
          'check_box2' => 'どちらかといえばはい',
          'check_box3' => 'どちらともない',
          'check_box4' => 'どちらかといえばいいえ',
          'check_box5' => 'いいえ',
          ],
          [
          'q' => '質問５',
          'ask' => '軽率に考える方だ',
          'check_box1' => 'はい',
          'check_box2' => 'どちらかといえばはい',
          'check_box3' => 'どちらともない',
          'check_box4' => 'どちらかといえばいいえ',
          'check_box5' => 'いいえ',
          ],
          ];

          foreach ($items as $item) {
            echo '
            <div class="form-item">
              <div class="question">
                <h3>' . $item['q'] . '</h3>
                <p>' . $item['ask'] . '</p>
              </div>
              <div class="answer">
                <div>
                  <input type="radio" name="q1" value="はい">
                  <label>' . $item['check_box1'] . '</label>
                </div>
                <div>
                  <input type="radio" name="q2" value="どちらかといえばはい">
                  <label>' . $item['check_box2'] . '</label>
                </div>
                <div>
                  <input type="radio" name="q3" value="どちらともいえない">
                  <label>' . $item['check_box3'] . '</label>
                </div>
                <div>
                  <input type="radio" name="q4" value="どちらかといえばいいえ">
                  <label>' . $item['check_box4'] . '</label>
                </div>
                <div>
                  <input type="radio" name="q5" value="いいえ">
                  <label>' . $item['check_box5'] . '</label>
                </div>
              </div>
            </div>
            ';
            }
        ?>

        <input class="bn632-hover bn26" type=submit value="送信">

      </form>

    </div>

  </body>
</html>