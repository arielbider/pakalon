<!DOCTYPE html>
<html>

<head>
  <title>445 בכף ידך</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
  <script src="js/site.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
  <div class="testbox">
    <form>
      <div class="banner">
        <h1>טופס 445 בכף ידך</h1>
      </div>
      <br />
      <fieldset>
        <legend>פרטי החייל</legend>
        <div class="item">
          <label for="first_name"> שם פרטי<span>*</span></label>
          <input id="first_name" type="text" name="first_name" required/>
        </div>
        <div class="item">
          <label for="last_name"> שם משפחה<span>*</span></label>
          <input id="last_name" type="text" name="last_name" required/>
        </div>
        <div class="item">
          <label for="personal_id">מספר אישי<span>*</span></label>
          <input id="personal_id" type="number" name="personal_id" required/>
        </div>
        <div class="item">
          <label for="rank">דרגה<span>*</span></label>
          <input id="rank" type="text" name="fee" list="ranks" required/>
          <datalist id="ranks">
            <option value="טוראי">
            <option value="רב טוראי">
            <option value="סמל">
            <option value="סמל ראשון">
            <option value="רב סמל">
          </datalist>
          <div class="item">
            <label for="workyear">שנת עבודה<span>*</span></label>
            <input id="workyear" type="number" name="workyear" required/>
          </div>
        </div>
        <div class="item">
          <label for="miluim_start">תאריך תחילת השמ"פ" <span>*</span></label>
          <input id="miluim_start" type="date" name="miluim_start" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <label for="miluim_end">תאריך סיום השמ"פ" <span>*</span></label>
          <input id="miluim_end" type="date" name="miluim_end" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <label for="date_of_sign">תאריך החתמה <span>*</span></label>
          <input id="date_of_sign" type="date" name="date_of_sign" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>

      </fieldset>
      <br />
      <fieldset>
        <legend>סוגי חריגויות</legend>
        <div class="question">
          <label>בחר את סוגי החריגויות</label>
          <div class="question-answer">
            <div>
              <input type="checkbox" value="none" id="checkbox_1" name="participants" />
              <label for="checkbox_3" class="checkbox"><span>התראה</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_2" name="participants" />
              <label for="checkbox_4" class="checkbox"><span>פיצול</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_3" name="participants" />
              <label for="checkbox_5" class="checkbox"><span>מרווח זמן בין שמ"פ לשמ"פ</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_4" name="participants" />
              <label for="checkbox_6" class="checkbox"><span>נוהל צבירת שעות</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_5" name="participants" />
              <label for="checkbox_6" class="checkbox"><span>מרווח זמן משירות סדיר</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_6" name="participants" />
              <label for="checkbox_6" class="checkbox"><span>שחרור וגיוס בימים אסורים</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_7" name="participants" />
              <label for="checkbox_6" class="checkbox"><span>משימה בהתנדבות</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_8" name="participants" />
              <label for="checkbox_7" class="checkbox"><span>אחר</span></label>
              <input type="text" />
              <div>
                <input type="checkbox" value="none" id="checkbox_9" name="participants" />
                <label for="checkbox_6" class="checkbox"><span>רצף שירות</span></label>
              </div>
              <div>
                <input type="checkbox" value="none" id="checkbox_10" name="participants" />
                <label for="checkbox_6" class="checkbox"><span>משך שירות</span></label>
              </div>
              <div>
                <input type="checkbox" value="none" id="checkbox_11" name="participants" />
                <label for="checkbox_6" class="checkbox"><span>משך שרות תלת-שנתי</span></label>
              </div>
              <div>
                <input type="checkbox" value="none" id="checkbox_12" name="participants" />
                <label for="checkbox_6" class="checkbox"><span>מספר הקריאות לשמ"פ בשנה</span></label>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="btn-block">
        <!-- <a id="submit" class="submit" href='tofes/index.html?personal_id=8750545&rank=סמל&first_name=אריאל&last_name=בידר&workyear=2021&miluim_start=2021-08-29&miluim_end=2021-08-31&reasons=["משך%20השירות","התראה"]&date_of_sign=2021-08-28'>צור טופס</a> -->
        <a id="submit" class="submit">צור טופס</a>
      </div>
    </form>
  </div>
</body>

</html>
