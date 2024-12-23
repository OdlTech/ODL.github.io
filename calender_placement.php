<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/style4.css">
    <link rel="stylesheet" href="CSS/evo-calendar.min.css">
    <link rel="stylesheet" href="CSS/evo-calendar.royal-navy.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>


<body style="background: lightblue;">
  <div>
    <br><br><br>
  </div>
  <h1 style="color: black;"><center><B>Event Calendar Of eMaster Programme</B></center></h1>
 
  <div>
    <br><br><br>
  </div>

    <div class="hero">

        <div id="calendar"></div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="Js/evo-calendar.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#calendar').evoCalendar({

                calendarEvents: [
                 
      {
        name: "Pre Registration ",
        // badge: "12/02/24 - 07/03/24", // Event badge (optional)
        date: ["12 Feb, 2024", "07 Mar, 2024"], // Date range
        description: "Pre Registration-Q3-2024(12/02/24 - 07/03/24)", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      {
        name: "Placement ",
        // badge: "12/02/24 - 24/03/24", // Event badge (optional)
        date: ["12 Feb, 2024", "24 Mar, 2024"], // Date range
        description: "Student Placement Registration-Q3-2024(12/02/24 - 24/03/24) ", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      {
        name: "Pre Registration ",
        // badge: "06/05/24 - 30/05/24", // Event badge (optional)
        date: ["06 May, 2024", "30 May, 2024"], // Date range
        description: "Pre Registration-Q4-2024(06/05/24 - 30/05/24)", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      {
        name: "Placement ",
        // badge: "06/05/24 - 16/06/24", // Event badge (optional)
        date: ["06 May, 2024", "16 Jun, 2024"], // Date range
        description: "Student Placement Registration-Q4-2024 (06/05/24 - 16/06/24) ", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      {
        name: "Student Placement Registration Form ",
        // badge: "06/05/24 - 16/06/24", // Event badge (optional)
        date: ["14 Jun, 2024", "07 July, 2024"], // Date range
        description: "Start Date: JUNE 14, 2024 and End Date: JULY 07, 2024 ", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      {
        name: "Student Placement Registration Form ",
        // badge: "06/12/24 - 29/12/24", // Event badge (optional)
        date: ["06 Dec, 2024", "29 Dec, 2024"], // Date range
        description: "Student Registration date", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
    ]
                
            })
        })

    </script>
</body>
</html>