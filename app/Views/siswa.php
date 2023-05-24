 <?php if (session()->get('role')=== 'sdmin') : ?>
    <h3>Data-Siswa</h3>
    <table class="table-bordered table-striped">
        <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tanggal lahir</th>
        </tr>
        <tr>
                <td>Andi Saputra</td>
                <td>101</td>
                <td>2003-12-22</td>
        </tr>
        <tr>
                <td>Budi Cahya</td>
                <td>102</td>
                <td>2004-1-30</td>
        </tr>
    </table>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Anda tidak memiliki akses untuk melihat dat
        </div>
<?php endif; ?>
    