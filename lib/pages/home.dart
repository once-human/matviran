import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'lib/utils/theme_provider.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    final themeProvider = Provider.of<ThemeProvider>(context);

    return Scaffold(
      appBar: AppBar(
        title: const Text('Matviran'),
        actions: [
          IconButton(
            icon: Icon(
              themeProvider.currentTheme.brightness == Brightness.dark
                  ? Icons.light_mode
                  : Icons.dark_mode,
            ),
            onPressed: () => themeProvider.toggleTheme(),
          ),
        ],
      ),
      body: const Center(
        child: Text('Welcome to Matviran!'),
      ),
    );
  }
}
