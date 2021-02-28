class Estudio {
  int id;
  String estudio;
  String costo;


  Estudio(
    { 
    this.id,
    this.estudio,
    this.costo,
    });

  factory Estudio.fromJson(Map<String, dynamic>json){
    return Estudio(
      id: json['id'],
      estudio: json['estudio'],
      costo: json['costo'],
    );
  }
}