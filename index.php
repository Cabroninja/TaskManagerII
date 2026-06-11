<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f4f7fb;
            --card: #ffffff;
            --text: #1f2933;
            --accent: #1769aa;
            --border: #d9e2ec;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, #eef4ff 0%, var(--bg) 100%);
            color: var(--text);
        }

        main {
            max-width: 900px;
            margin: 48px auto;
            padding: 0 20px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 18px 45px rgba(23, 105, 170, 0.08);
        }

        h1,
        h2 {
            margin-top: 0;
            color: var(--accent);
        }

        p,
        li {
            line-height: 1.6;
        }

        ul {
            padding-left: 22px;
        }

        section + section {
            margin-top: 28px;
        }
    </style>
</head>
<body>
    <main>
        <div class="card">
            <h1>Gestor de Tareas</h1>

            <section>
                <h2>Integrantes</h2>
                <ul>
                    <li>Boris Carrasco</li>
                    <li>Nelson Espinoza</li>
                    <li>Cristian Malhue</li>
                    <li>Matias Guzman</li>
                </ul>
            </section>

            <section>
                <h2>Descripcion de la aplicacion</h2>
                <p>
                    La aplicacion a implementar sera un gestor de tareas en el que los usuarios podran
                    crear tareas principales. Cada tarea contara con un grupo de sub tareas o acciones
                    que se iran marcando como completadas hasta finalizar la tarea mayor.
                </p>
            </section>

            <section>
                <h2>Operaciones CRUD</h2>
                <p>
                    La aplicacion incluira operaciones CRUD para la gestion de tareas y sub tareas.
                    Se permitira la creacion de tareas y sub tareas, la eliminacion de tareas y sub
                    tareas, la modificacion de tareas y sub tareas, y la lectura de las tareas para
                    listarlas en el dashboard.
                </p>
            </section>
        </div>
    </main>
</body>
</html>
