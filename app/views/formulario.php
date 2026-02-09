<?php include 'layout/header.php'; ?>

<div class="form-container">
    <div class="form-box">
        <h2><?php echo isset($ticket['id']) ? 'Editar Ticket #' . $ticket['id'] : 'Registrar Nuevo Ticket'; ?></h2>
        <p>Complete los detalles del soporte técnico a continuación.</p>
        <br>

        <form action="index.php?action=guardar" method="POST" id="ticketForm">
            <input type="hidden" name="id" value="<?php echo $ticket['id'] ?? ''; ?>">

            <div class="input-group">
                <label for="cliente">Nombre del Cliente</label>
                <input type="text" name="cliente" id="cliente" value="<?php echo $ticket['cliente'] ?? ''; ?>" placeholder="Ej. Juan Pérez">
            </div>

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" value="<?php echo $ticket['email'] ?? ''; ?>" placeholder="correo@ejemplo.com">
            </div>

            <div class="input-group">
                <label for="equipo">Equipo / Dispositivo</label>
                <input type="text" name="equipo" id="equipo" value="<?php echo $ticket['equipo'] ?? ''; ?>" placeholder="Ej. Laptop Dell XPS 13">
            </div>

            <div class="input-group">
                <label for="descripcion">Descripción del Problema</label>
                <textarea name="descripcion" id="descripcion" rows="4" placeholder="Describa la falla..."><?php echo $ticket['descripcion'] ?? ''; ?></textarea>
            </div>

            <?php if (isset($ticket['id'])): ?>
            <div class="input-group">
                <label for="estado">Estado del Servicio</label>
                <select name="estado" id="estado">
                    <option value="Pendiente" <?php echo ($ticket['estado'] == 'Pendiente') ? 'selected' : ''; ?>>Pendiente</option>
                    <option value="En Proceso" <?php echo ($ticket['estado'] == 'En Proceso') ? 'selected' : ''; ?>>En Proceso</option>
                    <option value="Completado" <?php echo ($ticket['estado'] == 'Completado') ? 'selected' : ''; ?>>Completado</option>
                </select>
            </div>
            <?php endif; ?>

            <div style="display: flex; gap: 10px; margin-top: 1rem;">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <a href="index.php?action=listar" class="btn btn-danger" style="text-align: center;">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>