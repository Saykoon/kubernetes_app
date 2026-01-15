<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UWB App - Kubernetes Deployment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.5em;
        }
        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        .info-card h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.3em;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .info-value {
            color: #667eea;
            font-family: monospace;
        }
        .status {
            text-align: center;
            padding: 15px;
            background: #d4edda;
            color: #155724;
            border-radius: 10px;
            font-weight: bold;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 UWB Application</h1>
        
        <div class="info-card">
            <h2>📊 Informacje o serwerze</h2>
            <div class="info-row">
                <span class="info-label">Hostname:</span>
                <span class="info-value"><?php echo gethostname(); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Server IP:</span>
                <span class="info-value"><?php echo $_SERVER['SERVER_ADDR'] ?? 'N/A'; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Client IP:</span>
                <span class="info-value"><?php echo $_SERVER['REMOTE_ADDR'] ?? 'N/A'; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">PHP Version:</span>
                <span class="info-value"><?php echo phpversion(); ?></span>
            </div>
        </div>

        <div class="info-card">
            <h2>🐳 Informacje o środowisku</h2>
            <div class="info-row">
                <span class="info-label">Server Software:</span>
                <span class="info-value"><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Document Root:</span>
                <span class="info-value"><?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'N/A'; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Aktualna data:</span>
                <span class="info-value"><?php echo date('Y-m-d H:i:s'); ?></span>
            </div>
        </div>

        <div class="info-card">
            <h2>☸️ Kubernetes Info</h2>
            <div class="info-row">
                <span class="info-label">Pod Name:</span>
                <span class="info-value"><?php echo gethostname(); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Namespace:</span>
                <span class="info-value">default</span>
            </div>
            <div class="info-row">
                <span class="info-label">Service Port:</span>
                <span class="info-value">30002</span>
            </div>
        </div>

        <div class="status">
            ✅ Aplikacja działa poprawnie na Kubernetes!
        </div>

        <div class="footer">
            <p>Deployed via GitHub Actions | GCP Artifact Registry | Kubernetes</p>
            <p>Project: hopeful-keep-480204-e0</p>
        </div>
    </div>
</body>
</html>
