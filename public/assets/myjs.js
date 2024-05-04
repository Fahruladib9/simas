
$(function() {
    $("#pemasukanMasjid").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "colvis"]
    }).buttons().container().appendTo('#pemasukanMasjid_wrapper .col-md-6:eq(0)');
    $('#pemasukanMasjid2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $("#rekapMasjid").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "colvis"]
    }).buttons().container().appendTo('#rekapMasjid_wrapper .col-md-6:eq(0)');
    $('#rekapMasjid2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $("#pengeluaranMasjid").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "colvis"]
    }).buttons().container().appendTo('#pengeluaranMasjid_wrapper .col-md-6:eq(0)');
    $('#pengeluaranMasjid2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
