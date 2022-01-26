<script>
	$(document).ready(function(){
		$('#edit_petugas').on('show.bs.modal',function(event){
			$(this).find('#id_petugas').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_petugas').attr("value",$(event.relatedTarget).data('nama'));
			$(this).find('#username').attr("value",$(event.relatedTarget).data('username'));
			$(this).find('#password').attr("value",$(event.relatedTarget).data('password'));
			$(this).find('#level').attr("value",$(event.relatedTarget).data('level'));
		});
		$('#hapus_petugas').on('show.bs.modal',function(event){
			$(this).find('#id_petugas').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_petugas').attr("value",$(event.relatedTarget).data('nama'));
		});
		$('#edit_pegawai').on('show.bs.modal',function(event){
			$(this).find('#id_pegawai').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_pegawai').attr("value",$(event.relatedTarget).data('nama'));
			$(this).find('#username').attr("value",$(event.relatedTarget).data('username_pgw'));
			$(this).find('#nip').attr("value",$(event.relatedTarget).data('nip'));
			$(this).find('#alamat').attr("value",$(event.relatedTarget).data('alamat'));
		});
		$('#hapus_pegawai').on('show.bs.modal',function(event){
			$(this).find('#id_pegawai').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_pegawai').attr("value",$(event.relatedTarget).data('nama'));
		});
		$('#hapus_inventaris').on('show.bs.modal',function(event){
			$(this).find('#id_inventaris').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_barang').attr("value",$(event.relatedTarget).data('nama'));
		});
		$('#edit_data_inventaris').on('show.bs.modal',function(event){
			$(this).find('#id').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama').attr("value",$(event.relatedTarget).data('nama'));
			$(this).find('#kondisi').attr("value",$(event.relatedTarget).data('kondisi'));
			$(this).find('#keterangan_barang').attr("value",$(event.relatedTarget).data('keterangan_barang'));
			$(this).find('#tanggal').attr("value",$(event.relatedTarget).data('tanggal_register'));
			$(this).find('#kode_inventaris').attr("value",$(event.relatedTarget).data('kode_inventaris'));
			$(this).find('#jumlah_barang').attr("value",$(event.relatedTarget).data('jumlah_barang'));
			$(this).find('#petugas').attr("value",$(event.relatedTarget).data('petugas'));
			$(this).find('#jenis').attr("value",$(event.relatedTarget).data('jenis'));
			$(this).find('#ruang').attr("value",$(event.relatedTarget).data('ruang'));
		});
		$('#hapus_detail_pinjam').on('show.bs.modal',function(event){
			$(this).find('#id_detail_pinjam').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_barang').attr("value",$(event.relatedTarget).data('nama'));
		});
		$('#pengembalian').on('show.bs.modal',function(event){
			$(this).find('#id_peminjaman').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama').attr("value",$(event.relatedTarget).data('nama'));
			$(this).find('#tanggal_pinjam').attr("value",$(event.relatedTarget).data('tanggal_pinjam'));
		});
		$('#hapus_peminjaman').on('show.bs.modal',function(event){
			$(this).find('#id_peminjaman').attr("value",$(event.relatedTarget).data('id'));
			$(this).find('#nama_barang').attr("value",$(event.relatedTarget).data('nama'));
		});
	});
</script>