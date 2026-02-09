<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Técnico JTec - Gestión de Tickets</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://proyecto2-assets.netlify.app/css/estilos.css">
</head>
<body>
    <header style="background: var(--secondary); padding: 1rem 0; color: white;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding-top:0; padding-bottom:0;">
            <a href="index.php" style="color: white; text-decoration: none; font-size: 1.5rem; font-weight: 700;">
                Soporte JTec<span style="color: var(--primary);">.</span>
            </a>
            <nav>
                <ul style="display: flex; list-style: none; gap: 15px; align-items: center; margin: 0;">
                    <li>
                        <a href="index.php?action=listar" 
                        style="color: white; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid rgba(255,255,255,0.3); border-radius: 6px; transition: 0.3s;"
                        onmouseover="this.style.borderColor='white'; this.style.backgroundColor='rgba(255,255,255,0.1)';"
                        onmouseout="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.backgroundColor='transparent';">
                        Ver Tickets
                        </a>
                    </li>
                    <li>
                        <a href="index.php?action=nuevo" class="btn btn-primary" style="padding: 0.5rem 1.2rem; box-shadow: 0 4px 14px 0 rgba(0,118,255,0.39);">
                        Crear Ticket
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">