#include <iostream>
#include "Gadget.cpp"   // mewarisi dari Gadget

using namespace std;

class Smartphone : public Gadget {
private:
    string sistemOperasi;
    string memori;
    string kamera;

public:
    Smartphone() {
    }

    // Setter & Getter
    void setSistemOperasi(string sistemOperasi) {
        this->sistemOperasi = sistemOperasi;
    }
    string getSistemOperasi() {
        return this->sistemOperasi;
    }

    void setMemori(string memori) {
        this->memori = memori;
    }
    string getMemori() {
        return this->memori;
    }

    void setKamera(string kamera) {
        this->kamera = kamera;
    }
    string getKamera() {
        return this->kamera;
    }
};
