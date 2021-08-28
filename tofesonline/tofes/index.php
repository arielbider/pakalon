<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>445 בכף ידך</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
  <script src="js/site.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

</head>

<body>

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h1>אנא חתמו על טופס זה</h1>
      </div>
      <div class="modal-body">
        <div id="scrathpad-wrapper">
          <canvas id="scrathpad"></canvas>
        </div>
        <!-- TODO: Add a buttom to submit signature -->
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>

  <!-- Page content -->
  <div class="container">
    <p class="sivug">-מוגבל לאחר מילוי-</p>
    <div class="tofes">
      <div class="tofes-header">
        <h2>כתב הסכמה לחריגי קריאה/חריגי שירות</h2>
        <h4>על פי הק"א 31-08-01 - "שירות המילואים - הוראות קריאה לשירות"</h4>
      </div>
      <h3>חלק א'- כתב הסכמה לחריגי קריאה</h3>
      <p>אני</p>
      <div class="id-table">
        <table>
          <tr class="first-row">
            <td rowspan="2">2400</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="second-row">
            <td colspan="7">מספר אישי</td>
            <td>דרגה</td>
            <td>שם משפחה</td>
            <td>שם פרטי</td>
          </tr>
        </table>
      </div>
      <p class="vitur-p">החתום מטה מסכים בזה, לאחר שהובאו לידעתי המגבלות והסייגים הנוגעים לקריאתם של חיילי מילואים לשמ"פ בשנה"ע <span>____________</span> להתנדב לשירות מילואים, בלא שהגורם הקורא יהיה כפוף למגבלות ולסייגים בנושאים המפורטים להלן (כולם
        או חלקם).
      </p>
      <div class="vitur-dates">
        <p>שנתי/משימה:</p>
        <p>מתאריך</p>
        <table>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
        <p>עד תאריך</p>
        <table>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <p style="font-size: 13px;">התאריכים הינם תאריכי שנת העבודה או תאריכי המשימה אליהם התנדב החייל ועבורם ניתנת הסכמה. <u><b>לא ניתן להחתים מעבר לשנת עבודה אחת.</b></u></p>
      <div class="hrigot-table">
        <table>
          <tr class="header">
            <td class="hrigot-type">סוג החריגה</td>
            <td class="hrigot-pirut">פירוט</td>
            <td>חתימת החייל</td>
          </tr>
          <tr>
            <td><b>התראה</b></td>
            <td>מספר הימים המינימאלי להתראה:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>פיצול</b></td>
            <td>פיצל תקופת השמ"פ המקורית אליה נקראתי ל____ פיצולים/ל______ תקופות שמ"פ. ידוע לי כי בימים שבין תקופות השמ"פ האמורות לא אהיה במסגרת שמ"פ.<br>עוד ידוע לי, כי ייחשב השירות אותו ביצעתי בכללותו כקריאה אחת במניין היקף הקריאות המותרות בשנה.
            </td>
            <td></td>
          </tr>
          <tr>
            <td><b>מרווח זמן בין שמ"פ לשמ"פ</b></td>
            <td>מרווח הזמן בין שמ"פ לשמ"פ הינו:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>נוהל צבירת שעות</b></td>
            <td>קריאה חריגה מסוג התראה, פיצול, מרווח זמן בין שמ"פ לשמ"פ</td>
            <td></td>
          </tr>
          <tr>
            <td><b>מרווח זמן משירות סדיר</b></td>
            <td>מרווח מינימאלי מתום השירות הסדיר:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>שחרור וגיוס בימים אסורים</b></td>
            <td>מועד:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>משימה בהתנדבות</b></td>
            <td>למעט משימות תחזוקה, שמירה במחנות צה"ל והגנ"ש</td>
            <td></td>
          </tr>
          <tr>
            <td><b>אחר</b></td>
            <td>פרט:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>רצף שירות</b></td>
            <td>משך שירות מילואים <u>רצוף</u> מרבי:</td>
            <td></td>
          </tr>
          <tr>
            <td><b>משך השירות</b></td>
            <td>משך שירות מילואים <u>נוסף</u> שלא יעלה על 180 ימים בשנ"ע _____ השירות הינו בנוסף לתקופת שירות מילואים, שבו הנני חייב על-פי חוק שירות המילואים, התשס"ח-2008, ולתקופה אשר רשומה לעיל. ידוע לי, כי בתקופת שירותי בהתנדבות יחול עליי חוק
              השיפוט הצבאי, התשט"ו-1955.</td>
            <td></td>
          </tr>
          <tr>
            <td><b>משך שרות תלת-שנתי</b></td>
            <td>משך שירות מילואים <u>נוסף</u> מרבי שלא יעלה על 180 ימים בשנ"ע אחת ______. השירות הינו בנוסף לתקופת שירות מילואים, שבו הנני חייב על-פי חוק שירות המילואים, התשס"ח-2008, ולתקופה אשר רשומה לעיל. ידוע לי, כי בתקופת שרותי בהתנדבות יחול עליי
              חוק השיפוט הצבאי, התשט"ו-1955.</td>
            <td></td>
          </tr>
          <tr>
            <td><b>מספר קריאות לשמ"פ בשנה</b></td>
            <td>הנני מתנדב ל_____ קריאות מעבר למותר בשנה.</td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="signature">
        <div>
          <p><b>תאריך:</b></p>
          <p>____________</p>
        </div>
        <div class="soldier-all-signature">
          <p><b>חתימת החייל:</b></p>
          <p>____________</p>
        </div>
      </div>

      <hr style="width:90%" , size="2" , color=black>

      <div>
        <p><b>ביטול התנדבות לחריג קריאה</b> (ימולא טרם התייצבות החייל לשמ"פ")</p>

        <div class="id-table">
          <table>
            <tr class="first-row">
              <td rowspan="2">2402</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="second-row">
              <td colspan="7">מספר אישי</td>
              <td>דרגה</td>
              <td>שם משפחה</td>
              <td>שם פרטי</td>
              <td>חיל</td>
              <td>יחידה</td>
            </tr>
          </table>
        </div>
        <div class="vitur-dates">
          <p>הריני מבקש לבטל את התנדבותי מתאריך</p>
          <table>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
          <p>עד תאריך</p>
          <table>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
        <p><b>*התנדבותי/ביטול התנדבותי הינם לשירות המילואים אשר תאריכי תחילתו וסיומו מופיעים לעיל.</b></p>
        <div class="cancel-id">
          <table>
            <tr class="cancel-id-first-row">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="cancel-id-second-row">
              <td>(מספר אישי)</td>
              <td>(דרגה)</td>
              <td>(שם פרטי ושם משפחה)</td>
              <td>(תפקיד)</td>
              <td>(תאריך)</td>
              <td>(חתימת החייל)</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <p class="sivug">-מוגבל לאחר מילוי-</p>
    <div class="credit noprint">
      <p>© כל הזכויות שמורות לאריאל בידר, השלמת משא"ן מילואים 21ג'</p>
    </div>
  </div>

</body>

</html>
