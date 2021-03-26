
import 'dart:developer';

import 'package:dio/dio.dart';

import 'providers/auth.dart';
Dio dio() {
  var dio= Dio(
    BaseOptions(
     // baseUrl: 'http://127.0.0.1:8000/api/',
    baseUrl: 'http://10.0.2.2:8000/api/',
    responseType: ResponseType.plain,
    headers: {
      'accept': 'application/json',
      'content-type': 'application/json',
    }
  )
  );

  dio..interceptors.add(InterceptorsWrapper(
     onRequest: (options)=> requestInterceptor(options)

  ));

  return dio;
}

dynamic requestInterceptor(RequestOptions options)async{
  if (options.headers.containsKey('auth')) {
    var token = await Auth().getToken();

    //options.headers.addAll({'Authorization': 'Bearer 2|yxb90AUm7mKa5pMGCQXW0y9civWmoRVBn2dud2J8'});
    options.headers.addAll({'Authorization': 'Bearer $token'});
  }

}