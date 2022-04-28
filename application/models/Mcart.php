<?php
    class Mcart extends CI_Model{

        public function getdataproduct($ID){
            $this->db->SELECT('b.Nama_barang, b.Harga_barang, b.Gambar, c.*');
            $this->db->WHERE('c.Id_pengguna', $ID);
            $this->db->FROM('cart c');
            $this->db->JOIN('barang b', 'b.ID=c.Id_barang', 'LEFT');
            $this->db->ORDER_BY('c.ID', 'DESC');
            $hasil= $this->db->get('cart');
            return $hasil->result();
        }

        public function getDataCart($ID){
            $this->db->SELECT('b.*, c.*');
            $this->db->WHERE('c.Id_pengguna', $ID);
            $this->db->FROM('cart c');
            $this->db->JOIN('barang b', 'b.ID=c.Id_barang', 'LEFT');
            $this->db->ORDER_BY('c.ID', 'DESC');
            $this->db->GROUP_BY('b.ID');
            $hasil= $this->db->get('cart');
            return $hasil->result();
        }

        public function checkPenggunaAndBarang($Id_barang, $Id_pengguna){
            $this->db->WHERE('Id_barang', $Id_barang);
            $this->db->WHERE('Id_pengguna', $Id_pengguna);
            $hasil= $this->db->get('cart');
            return $hasil->row();
        }

        public function tambahKeranjang($data){
            $this->db->insert('cart', $data);
            return $this->db->affected_rows();
        }

        public function updateKeranjang($where, $table, $data)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
            
        }

        public function checkout($data){

            // bikin kode pembelian
            $count_pembelian = $this->db->select('*')
                                ->get('pembelian')
                                ->num_rows();
            $kode = 'P-' . date('Ymdhis') . $data['Id_pengguna']. '-' . $count_pembelian + 1;

            // Create pembelian
            $this->db->insert('pembelian', [
                'Id_pengguna' => $data['Id_pengguna'],
                'Total' => $data['Total'],
                'Status' => 'process',
                'Kode'  => $kode,
                'tanggal_beli' => date('Y-m-d'),
            ]); 

            // Simpan value id_pembayaran
            $Id_pembelian = $this->db->insert_id();

            // Create pembayaran
            $this->db->insert('pembayaran', [
                'Id_pengguna' => $data['Id_pengguna'],
                'Id_pembelian' => $Id_pembelian,
            ]);
            
            // Simpan value id_pembelian
            $Id_pembayaran = $this->db->insert_id();

            // Delete cart where Id_pengguna
            $this->db->where('Id_pengguna', $data['Id_pengguna']);
            $this->db->delete('cart');

            // Create pembelian detail
            foreach ($data['Id_barang'] as $key => $Id_barang) {
                $this->db->insert('pembelian_detail', [
                    'Id_pembelian' => $Id_pembelian,
                    'Id_barang' => $Id_barang,
                    'Jumlah' => $data['Jumlah'][$key],
                    'Size' => $data['Size'][$key],
                ]);
            }
            return $Id_pembayaran;
        }

        public function buy($data){
            
            // bikin kode pembelian
            $count_pembelian = $this->db->select('*')
                                ->get('pembelian')
                                ->num_rows();
            $kode = 'P-' . date('Ymdhis') . $data['Id_pengguna']. '-' . $count_pembelian + 1;

            // Create pembelian
            $this->db->insert('pembelian', [
                'Id_pengguna' => $data['Id_pengguna'],
                'Total' => $data['Total'],
                'Status' => 'process',
                'Kode'  => $kode,
                'tanggal_beli' => date('Y-m-d'),
            ]); 

            // Simpan value id_pembayaran
            $Id_pembelian = $this->db->insert_id();

            // Create pembayaran
            $this->db->insert('pembayaran', [
                'Id_pengguna' => $data['Id_pengguna'],
                'Id_pembelian' => $Id_pembelian,
            ]);
            
            // Simpan value id_pembelian
            $Id_pembayaran = $this->db->insert_id();

            // Delete cart where Id_pengguna
            $this->db->where('Id_pengguna', $data['Id_pengguna']);
            $this->db->delete('cart');

            // Create pembelian detail
                $this->db->insert('pembelian_detail', [
                    'Id_pembelian' => $Id_pembelian,
                    'Id_barang' => $data['Id_barang'],
                    'Jumlah' => $data['Jumlah'],
                    'Size' => $data['Size'],
                ]);
            return $Id_pembayaran;
        }

        public function getCart($ID){
            $this->db->where('Id_pengguna',$ID);
            $hasil= $this->db->get('cart');
            return $hasil->row();
        }

        public function hapusData($ID){
            $this->db->where('ID', $ID);
            $res = $this->db->delete('cart');
            return $this->db->affected_rows();
        }
    }
?>