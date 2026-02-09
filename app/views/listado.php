<?php include 'layout/header.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; margin-top: 2rem;">
        <h2 style="color: var(--secondary); margin: 0;">Gestión de Tickets</h2>
        <a href="index.php?action=nuevo" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nuevo Ticket
        </a>
    </div>

    <div style="background: white; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); overflow: hidden;">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Equipo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($tickets && $tickets->rowCount() > 0): ?>
                    <?php while ($row = $tickets->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td style="font-weight: 500;"><?= $row['cliente'] ?></td>
                        <td><?= $row['equipo'] ?></td>
                        <td>
                            <?php 
                                $bg = '#64748b'; // Color por defecto (Gris)
                                if($row['estado'] == 'En Proceso') $bg = '#eab308'; // Amarillo
                                if($row['estado'] == 'Completado') $bg = '#22c55e'; // Verde
                            ?>
                            <span style="background: <?= $bg ?>; color: white; padding: 4px 10px; border-radius: 12px; font-size: 0.8rem;">
                                <?= $row['estado'] ?>
                            </span>
                        </td>
                        <td>
                            <a href="index.php?action=editar&id=<?= $row['id'] ?>" style="color: var(--primary); margin-right: 10px; text-decoration: none;">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <a href="index.php?action=eliminar&id=<?= $row['id'] ?>" style="color: var(--danger); text-decoration: none;" onclick="return confirm('¿Eliminar?');">
                                <i class="fas fa-trash"></i> Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4" style="text-align:center; padding: 20px;">No hay tickets registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php'; ?>