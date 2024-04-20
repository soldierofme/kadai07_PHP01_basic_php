<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSV Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 800px;
      width: 90%;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    h2 {
      text-align: center;
      color: #333333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-top: 20px;
    }

    th,
    td {
      border-bottom: 1px solid #dddddd;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    tr {
      background-color: #f2f2f2;
      transition: background-color 0.3s;
    }

    tr:hover {
      background-color: #ddd;
    }

    .back-button {
      display: block;
      text-align: center;
      margin-top: 20px;
    }

    .back-button a {
      text-decoration: none;
      color: #4CAF50;
      font-weight: bold;
      padding: 10px 20px;
      border: 2px solid #4CAF50;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .back-button a:hover {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>登録情報一覧</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Memo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // CSV ファイルを読み込む
        $file = fopen("data.csv", "r");
        // ヘッダー行をスキップ
        fgetcsv($file);
        // データをテーブルに出力
        while (($row = fgetcsv($file)) !== false) {
          echo "<tr>";
          foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
          }
          echo "</tr>";
        }
        fclose($file);
        ?>
      </tbody>
    </table>
    <div class="back-button">
      <a href="index.php">登録画面に戻る</a>
    </div>
  </div>
</body>

</html>
