{{--
這裡的程式碼來自於 public/apidoc/index.html
屬於 swagger 的模板，這裡僅修改引用的路徑
--}}
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <base href="{{ url('/api-document') }}/">
    <link rel="stylesheet" type="text/css" href="/apidoc/swagger-ui.css">
    <link rel="icon" type="image/png" href="/apidoc/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/apidoc/favicon-16x16.png" sizes="16x16"/>
    <style>
        html {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            background: #fafafa;
        }
    </style>
</head>

<body>
<div id="swagger-ui"></div>

<script src="/apidoc/swagger-ui-bundle.js"></script>
<script src="/apidoc/swagger-ui-standalone-preset.js"></script>
<script>
    window.onload = function () {
        // Begin Swagger UI call region
        const ui = SwaggerUIBundle({
            url: "/api/v1/api-document-content",
            dom_id: '#swagger-ui',
            deepLinking: true,
            // 這行可以預設不打開
            docExpansion: 'none',
            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],
            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],
            layout: "StandaloneLayout"
        })
        // End Swagger UI call region

        window.ui = ui
    }
</script>
</body>
</html>
