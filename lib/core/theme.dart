import 'package:flutter/material.dart';

class MatviranTheme {
  // Colors for dark theme
  static const Color darkBackground = Color(0xFF41493A);
  static const Color darkPrimaryAccent = Color(0xFF85B068);
  static const Color darkTextDescription = Color(0xFFA5AE9D);
  static const Color darkTextMain = Colors.white;
  static const Color darkSecondaryAccent = Color(0xFF00B6D5);
  static const Color darkTertiaryAccent = Color(0xFF007F9F);

  // Colors for light theme
  static const Color lightBackground = Color(0xFFA5AE9D);
  static const Color lightText = Color(0xFF41493A);

  // Font families
  static const String fontHeading = 'Urbanist';
  static const String fontBody = 'Inter';

  // Dark theme definition
  static final ThemeData darkTheme = ThemeData(
    useMaterial3: true,
    brightness: Brightness.dark,
    primaryColor: darkPrimaryAccent,
    scaffoldBackgroundColor: darkBackground,
    colorScheme: ColorScheme.dark(
      background: darkBackground,
      primary: darkPrimaryAccent,
      secondary: darkSecondaryAccent,
      tertiary: darkTertiaryAccent,
      onBackground: darkTextDescription,
      onPrimary: darkTextMain,
    ),
    textTheme: TextTheme(
      headline1: TextStyle(
        fontFamily: fontHeading,
        fontSize: 32,
        fontWeight: FontWeight.bold,
        color: darkTextMain,
      ),
      bodyText1: TextStyle(
        fontFamily: fontBody,
        fontSize: 16,
        color: darkTextDescription,
      ),
      bodyText2: TextStyle(
        fontFamily: fontBody,
        fontSize: 14,
        color: darkTextDescription,
      ),
    ),
  );

  // Light theme definition
  static final ThemeData lightTheme = ThemeData(
    useMaterial3: true,
    brightness: Brightness.light,
    primaryColor: darkPrimaryAccent, // Primary accent remains the same
    scaffoldBackgroundColor: lightBackground,
    colorScheme: ColorScheme.light(
      background: lightBackground,
      primary: darkPrimaryAccent,
      secondary: darkSecondaryAccent,
      tertiary: darkTertiaryAccent,
      onBackground: lightText,
      onPrimary: lightText,
    ),
    textTheme: TextTheme(
      headline1: TextStyle(
        fontFamily: fontHeading,
        fontSize: 32,
        fontWeight: FontWeight.bold,
        color: lightText,
      ),
      bodyText1: TextStyle(
        fontFamily: fontBody,
        fontSize: 16,
        color: lightText,
      ),
      bodyText2: TextStyle(
        fontFamily: fontBody,
        fontSize: 14,
        color: lightText,
      ),
    ),
  );
}
