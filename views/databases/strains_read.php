<h3>Strains record</h3>
<div class="table-responsive">
    <table class="table table-striped thead-dark">
        <tr>
            <th>Species</th>
            <td><?php echo $species; ?></td>
        </tr>
        <tr>
            <th>Strain</th>
            <td><?php echo $strain; ?></td>
        </tr>
        <tr>
            <th>Constructs</th>
            <td><?php echo $constructs; ?></td>
        </tr>
        <tr>
            <th>Genes</th>
            <td><?php echo $genes; ?></td>
        </tr>
        <tr>
            <th>Plasmid</th>
            <td><?php echo $plasmid; ?></td>
        </tr>
        <tr>
            <th>Marker</th>
            <td><?php echo $marker; ?></td>
        </tr>
        <tr>
            <th>Source</th>
            <td><?php echo $source; ?></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?php echo $comments; ?></td>
        </tr>
        <tr>
            <th></th>
            <td><a href="<?php echo site_url('databases/strains') ?>" class="btn btn-primary">Back</a></td>
        </tr>
    </table>
</div>
