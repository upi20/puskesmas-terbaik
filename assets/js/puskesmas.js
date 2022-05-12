/**
 * Aplikasi ini dibuat oleh:
 * Isep Lutpi Nur (2113191079)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */

function hapus_puskesmas(id) {
	$.ajax({
		url: base_url + "puskesmas/" + "delete/" + id,
		type: "POST",
		dataType: "JSON",
		success: function (data) {
			location.reload();
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error adding / update data');
		}
	});
}
