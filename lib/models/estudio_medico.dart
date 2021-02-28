class Estudio {
  int id;
  String estudio;
  String costo;
  String img;


  Estudio(
    { 
    this.id,
    this.estudio,
    this.costo,
    this.img,
    });

  factory Estudio.fromJson(Map<String, dynamic>json){
    return Estudio(
      id: json['id'],
      estudio: json['estudio'],
      costo: json['costo'],
      img: json['img'],
    );
  }
}