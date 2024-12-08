import 'package:flutter/material.dart';
import '../core/theme.dart';

class ThemeProvider extends ChangeNotifier {
  ThemeData _currentTheme = MatviranTheme.darkTheme; // Default is dark theme

  ThemeData get currentTheme => _currentTheme;

  void toggleTheme() {
    _currentTheme = _currentTheme == MatviranTheme.darkTheme
        ? MatviranTheme.lightTheme
        : MatviranTheme.darkTheme;
    notifyListeners();
  }
}
