#include <iostream>

using namespace std;

class ProdukElektronik{
    private:

    string kode;
    string nama;
    int harga;
    string deskripsi;

    public:

    ProdukElektronik(){

    }
    void setkode(string kode){
        this -> kode=kode;
    }
    string getkode(){
        return this->kode;
    }

    void setnama(string nama){
        this -> nama=nama;
    }
    string getnama(){
        return this->nama;
    }

    void setharga(int harga){
        this->harga=harga;
    }
    int getharga(){
        return this->harga;
    }

    void setdeskripsi(string deskripsi){
        this->deskripsi=deskripsi;
    }
    string getdeskripsi(){
        return this->deskripsi;
    }
    // ProdukElektronik(string nama,int harga,string deskripsi){
    //     this ->nama=nama;
    //     this->harga=harga;
    //     this->deskripsi=harga;
    // }

};

// getter setter


