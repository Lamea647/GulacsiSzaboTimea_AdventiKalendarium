<div>
    <h1>Adventi kalendárium tételeinek listája</h1>
    <?php if (isset($tetelek)): ?>
        <?php if (!empty($tetelek)): ?>
            <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tétel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tetelek as $tetel): ?>
                    <tr>
                        <td><?php echo $tetel['id'] ?></td>
                        <td><?php echo $tetel['tartalom'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>            
            </table>
        <?php else: ?>
            <h4>Nincs még tétel az adventi kalendáriumban!</h4>
        <?php endif; ?>
    <?php else: ?>
        <h4>Ismeretlen hiba történt!</h4>
    <?php endif; ?>
</div>