import os

def change_extension_to_html(directory):
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith('.blade.php'):
                old_path = os.path.join(root, file)
                new_file = file.rsplit('.', 2)[0] + '.html'
                new_path = os.path.join(root, new_file)
                os.rename(old_path, new_path)
                print(f"Переименован файл: {old_path} -> {new_path}")

# Укажите путь к директории, в которой нужно изменить расширения файлов
directory_path = os.path.dirname(os.path.abspath(__file__))
change_extension_to_html(directory_path)
