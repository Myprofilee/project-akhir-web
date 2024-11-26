<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Match Details</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    .match-details {
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 5px;
    }
    .match-details h2 {
      margin-top: 0;
    }
    .loading, .error {
      font-size: 16px;
      color: #666;
    }
  </style>
</head>
<body>
  <h1>Match Details</h1>
  <div id="match-details" class="match-details">
    <p class="loading">Loading match details...</p>
  </div>

  <script>
    // Ambil match ID dari URL
    const pathSegments = window.location.pathname.split('/'); // Pisahkan URL berdasarkan '/'
    const matchId = pathSegments[pathSegments.length - 1]; // Ambil ID dari segmen terakhir

    if (!matchId || isNaN(matchId)) { // Validasi apakah matchId ada dan valid
      document.getElementById('match-details').innerHTML = '<p class="error">No valid match ID provided.</p>';
    } else {
      const settings = {
        "url": `https://v3.football.api-sports.io/fixtures?id=${matchId}`,
        "method": "GET",
        "timeout": 0,
        "headers": {
          "x-rapidapi-key": "4e68115b540776889b262d93f088fe4c",
          "x-rapidapi-host": "v3.football.api-sports.io"
        },
      };

      $.ajax(settings).done(function (response) {
        const match = response.response[0];
        const matchDetailsDiv = document.getElementById('match-details');

        if (!match) {
          matchDetailsDiv.innerHTML = '<p class="error">Match not found.</p>';
          return;
        }

        const homeTeam = match.teams.home.name;
        const awayTeam = match.teams.away.name;
        const homeScore = match.goals.home !== null ? match.goals.home : '-';
        const awayScore = match.goals.away !== null ? match.goals.away : '-';
        const league = match.league.name;
        const round = match.league.round;
        const status = match.fixture.status.long;
        const date = new Date(match.fixture.date).toLocaleString();

        matchDetailsDiv.innerHTML = `
          <h2>${homeTeam} vs ${awayTeam}</h2>
          <p><strong>League:</strong> ${league}</p>
          <p><strong>Round:</strong> ${round}</p>
          <p><strong>Date:</strong> ${date}</p>
          <p><strong>Status:</strong> ${status}</p>
          <p><strong>Score:</strong> ${homeScore} - ${awayScore}</p>
        `;
      }).fail(function (error) {
        document.getElementById('match-details').innerHTML = '<p class="error">Failed to load match details. Please try again.</p>';
        console.error('Error:', error);
      });
    }
  </script>
</body>
</html>
