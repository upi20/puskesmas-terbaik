/**
 * Aplikasi ini dibuat oleh:
 * Akbar Maulana M Tarumadoya (2113191073)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */

function hapus_universitas(id) {
	$.ajax({
		url: base_url + "universitas/" + "delete/" + id,
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
