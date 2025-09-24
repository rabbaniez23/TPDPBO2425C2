#include <iostream>
#include "ProdukElektronik.cpp"

using namespace std;

class Gadget : public ProdukElektronik{
    private:

    string jenis;
    string garansi;
    string status;
    string stok;

    public:

    Gadget(){

    }

    void setjenis(string jenis){
        this -> jenis=jenis;
    }
    string getjenis(){
        return this->jenis;
    }

    void setgaransi(string garansi){
        this->garansi=garansi;
    }
    string getgaransi(){
        return this->garansi;
    }
    
    void setstatus(string status){
        this->status=status;
    }
    string getstatus(){
        return this->status;
    }

    void setstok(string stok){
        this->stok=stok;
    }
    string getstok(){
        return this->stok;
    }


};

// getter setter


