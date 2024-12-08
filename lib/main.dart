import 'package:flutter/material.dart';

void main() {
  runApp(const MatviranApp());
}

class MatviranApp extends StatelessWidget {
  const MatviranApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Matviran',
      theme: ThemeData(useMaterial3: true, primarySwatch: Colors.green),
      home: Scaffold(
        appBar: AppBar(title: const Text('Welcome to Matviran')),
        body: const Center(child: Text('Hello World!')),
      ),
    );
  }
}
