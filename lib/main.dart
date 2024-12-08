import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../utils/theme_provider.dart';
import 'pages/home.dart';

void main() {
  runApp(
    ChangeNotifierProvider(
      create: (_) => ThemeProvider(),
      child: const MatviranApp(),
    ),
  );
}

class MatviranApp extends StatelessWidget {
  const MatviranApp({super.key});

  @override
  Widget build(BuildContext context) {
    final themeProvider = Provider.of<ThemeProvider>(context);

    return MaterialApp(
      title: 'Matviran',
      theme: themeProvider.currentTheme,
      home: const HomePage(),
    );
  }
}
