<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>פקלון מישוב דיגיטלי</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
  <script src="js/site.js"></script>

</head>

<body>

  <!-- Name Modal -->
  <div id="nameModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" id="name-modal-close">&times;</span>
        <h2>הכניסו את שמכם</h2>
      </div>
      <div class="modal-body">
        <p contenteditable="true" class="enter-name-textbox" id="name-input"></p>
      </div>
    </div>
  </div>

  </div>


  <!-- Settings Modal -->
  <div id="settingsModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" id="settings-modal-close">&times;</span>
        <h2>הגדרות</h2>
      </div>
      <div class="modal-body">
        <div id="roomConnection">
          <h3>התחבר לחדר</h3>
          <div class="classIdDiv">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
            <input type="text" maxlength="1" class="classId">
          </div>
        </div>
        <div id="roomCreation">
          <h3>צור חדר</h3>
          <button id="createButton">צור חדר</button>
          <p id="createdId"></p>
          <table class="points-view" id="points-view">
            <tr>
              <td>שם</td>
              <td>נקודות לשיפור</td>
              <td>נקודות לשימור</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

  </div>

  <div class="logos">
    <img src="img/gear-icon.gif" id="gear">
    <img src="img/bhd1.png" id="bhd1">
    <img src="img/erez.png" id="erez">
  </div>

  <div class="titles">
    <h1>פק"לון מישוב דיגיטלי</h1>
    <p id="name"></p>
  </div>

  <div class="container">
    <table>
      <thead>
        <tr>
          <th colspan="6">מנהיגות</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>יעורר מוטיבציה</b> בפקודיו לביצוע משימות בשגרה, במלחמה ולנוכח קשיים</td>
          <td><b>יקבל החלטות</b> במציאות משתנה ובהתחשב במאפייני הפקודים, המפקדים <b>והמשימה</b></td>
          <td>ייצור <b>יציבות ובהירות</b> במסגרת, גם בתנאי אי וודאות ולחצים מתנגשים</td>
          <td><b>יפתח</b> את פקודיו בהיבטיים מקצועיים, מנהיגותיים וערכיים</td>
          <td>יגבש <b>תפיסה פיקודית</b> וערכית</td>
          <td>יהיה <b>מודע לחזקותיו ולחולשותיו</b> בהיבטים מקצועיים, מנהיגותיים וערכיים</td>
        </tr>
        <tr>
          <td>הנעת פקודים</td>
          <td>מיקום המפקד</td>
          <td>פרופורציות</td>
          <td>יחס אישי</td>
          <td>עקביות בהעברת מסרים</td>
          <td>ביטחון עצמי</td>
        </tr>
        <tr>
          <td>עבודה מול רמה ממונה</td>
          <td>הבנת סיטואציות חברתיות</td>
          <td>שליטה ואיפוק</td>
          <td>יכולת חניכה</td>
          <td>פתיחות</td>
          <td>יכולת מתן וקבלת ביקורת</td>
        </tr>
        <tr>
          <td>יצירת אמון</td>
          <td>איש שטח</td>
          <td>שקיפות</td>
          <td>דאגה לפרט</td>
          <td>פן אישי</td>
          <td>צניעות</td>
        </tr>
        <tr>
          <td>אסרטיביות</td>
          <td>הפרדה בין אישי למקצועי</td>
          <td>תפקוד בתנאי לחץ</td>
          <td>מעורבות</td>
          <td>פשטות</td>
          <td>תשדורת</td>
        </tr>
        <tr>
          <td>רתימת עמיתים</td>
          <td>התאמה לקהל היעד</td>
          <td>קור רוח</td>
          <td>הערכה ותגמול</td>
          <td>פועל לאור תפיסת הפיקוד שגיבש לעצמו</td>
          <td>מודעות עצמית</td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th colspan="8">ערכים</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>דבקות במשימה וחתירה לניצחון</b></td>
          <td><b>רעות</b></td>
          <td><b>משמעת</b></td>
          <td><b>שליחות</b></td>
          <td><b>אחריות</b></td>
          <td><b>אמינות</b></td>
          <td><b>הטמעת ערכי צה"ל במסגרת</b></td>
          <td><b>חיי אדם</b></td>
        </tr>
        <tr>
          <td>שאיפה למצוינות</td>
          <td>יחסי אנוש</td>
          <td>מוסר עבודה</td>
          <td>חיבור למשימה</td>
          <td>עצמאות</td>
          <td>אותנטיות</td>
          <td>פועל באופן ערכי לאור רוח צה"ל</td>
          <td rowspan="2"><b>דוגמה אישית</b></td>
        </tr>
        <tr>
          <td>חתירה למגע</td>
          <td>הקשבה</td>
          <td>הקפדה על נהלים ופקודות</td>
          <td>ייצוגיות</td>
          <td>ראייה מערכתית</td>
          <td>יושרה</td>
          <td>ניהול הזדמנויות חינוכיות</td>
        </tr>
        <tr>
          <td>התמדה</td>
          <td>סבלנות</td>
          <td>הצבת גבולות</td>
          <td>מסירות</td>
          <td></td>
          <td>לויאליות</td>
          <td>יכולת חינוכית</td>
          <td rowspan="2"><b>טוהר הנשק</b></td>
        </tr>
        <tr>
          <td>להט בעשייה</td>
          <td>סובלנות</td>
          <td>הצבת סטנדרט</td>
          <td>נאמנות</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>איתנות</td>
          <td>עזרה הדדית</td>
          <td>שמירה על בטיחות</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td rowspan="2"><b>מקצועיות</b></td>
        </tr>
        <tr>
          <td></td>
          <td>עבודת צוות</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th colspan="8">המקצוע הצבאי</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>תפקוד בעומס משימות</b></td>
          <td><b>ביצוע תהליך תכנון לקראת משימות</b></td>
          <td><b>הפקת לקחים ויישומם</b></td>
          <td><b>יכולת חשיבה וניתוח</b></td>
          <td><b>העברת מסרים</b></td>
          <td><b>ביצוע הערכת מצב אפקטיבית תו"כ ביצוע משימה</b></td>
          <td><b>ניהול זמן אפקטיבי</b></td>
          <td><b>יוזמה</b></td>
        </tr>
        <tr>
          <td>עבודה במקביל</td>
          <td>היערכות מקדימה</td>
          <td>הפקת לקחים</td>
          <td>אבחון סיטואציות</td>
          <td>ניסוח בכתב</td>
          <td>ראייה כוללת</td>
          <td>ניהול זמן</td>
          <td>יצירתיות</td>
        </tr>
        <tr>
          <td>האצלת סמכויות</td>
          <td>סדר וארגון</td>
          <td>חתירה ללמידה ולשיפור מתמיד</td>
          <td>גזירת משמעויות</td>
          <td>כושר ביטוי</td>
          <td>התמודדות עם בלת"מים</td>
          <td>הבחנה בין עיקר לטפל</td>
          <td>חשיבה מחוץ לקופסא</td>
        </tr>
        <tr>
          <td>קביעת סדר עדיפויות</td>
          <td>תכנון משימה לאור מטרה</td>
          <td>פתיחות לשינויים</td>
          <td>גמישות מחשבתית</td>
          <td>מיקוד במסרים</td>
          <td>יצירת תמונת מצב</td>
          <td>יעילות</td>
          <td>הגדלת ראש</td>
        </tr>
        <tr>
          <td>הפעלת שיקול דעת</td>
          <td>יצירת הבנה ורצף</td>
          <td>חשיבה ביקורתית</td>
          <td>יסודיות וירידה לפרטים</td>
          <td>עמידה מול קהל</td>
          <td>ביצוע בקרה ומעקב על ביצוע משימות</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>מיקוד</td>
          <td>בקיאות בתכנים מקצועיים</td>
          <td>תכנון מול ביצוע</td>
          <td>רלוונטיות</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="how-to-use">
    <div id="how-to-use-expend">
      <h3>כיצד משתמשים</h3>
      <img src="img/expend-question-mark.png" id="how-to-use-question-mark">
    </div>
    <p id="explanation">לחצו על ריבוע בפק"לון, והוא יסומן בצבע אדום כנקודה לשיפור. אם תלחצו שוב, הוא יסומן בצבע ירוק כנקודה לשימור. לחיצה נוספת תמחק את הצבע, ותוריד אותו מרשימת הנקודות שלכם.<br>
    כדי ליצור חדר, לחצו על כפתור ההגדרות מצד ימין למעלה, ולחצו על צור חדר. על המסך, יופיע לכם הקוד אותו אחרים צריכים להכניס במסך זה תחת "התחבר לחדר", ולכם כמנהלים, תופיע טבלה עם כלל המשתתפים והנקודות שהם דקרו.<br>
    כאשר אתם מתחברים לחדר, ומספר החדר תקין, יהיה כתוב להם מתחת למספר החדר, "מחובר לחדר" ומספרו.<br>
    שימוש נעים!</p>
  </div>

  <div class="credit">
    <p>© כל הזכויות שמורות לאריאל בידר, בוגר ארז 73</p>
    <p>"וואלה עידן הבאת פה רעיון"</p>
    <p>צרו קשר:</p>
    <div>
      <a href="https://github.com/arielbider/pakalon">
        <img src="img/github.png">
      </a>
      <a href="https://www.facebook.com/arik.bider/">
        <img src="img/facebook.png">
      </a>
      <a href="https://www.linkedin.com/in/ariel-bider-7aba86147/">
        <img src="img/linkedin.png">
      </a>
    </div>
  </div>
</body>

</html>
