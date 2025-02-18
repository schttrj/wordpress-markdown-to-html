# Markdown to HTML Converter

A WordPress plugin that allows you to seamlessly convert Markdown content into HTML using the `MD2HTML` button in the Text editor. It leverages the powerful **Marked.js** library for conversion.

## Features

- Add a custom **MD2HTML** button to the WordPress Text Editor for easy Markdown-to-HTML conversion.
- Automatically integrates **Marked.js** from the CDN.
- Works flawlessly with the post and page editing screens.

## Installation

1. Download the plugin files or clone the repository.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin via the **Plugins** menu in WordPress.

## Usage

1. Go to the post or page edit screen in WordPress.
2. Switch to the **Text editor** tab.
3. Write or paste your Markdown content.
4. Click the `MD2HTML` button added to the editor to instantly convert the Markdown content to HTML.

## Technical Details

- The plugin uses **Marked.js** (loaded via CDN) for the Markdown-to-HTML conversion.
- It requires the Quicktags library to add the custom `MD2HTML` button to the WordPress Text editor.

## Requirements

- WordPress 5.0 or higher.
- PHP 5.6 or higher.

## Changelog

### Version 1.1
- Added better error handling for missing dependencies.
- Refined Markdown-to-HTML conversion process.

### Version 1.0
- Initial release.

## About

- **Author**: Brain Room Media
- **Plugin URI**: [Markdown to HTML Converter](https://github.com/schttrj/wordpress-markdown-to-html)
- **License**: [GPL-2.0+](https://www.gnu.org/licenses/gpl-2.0.html)
