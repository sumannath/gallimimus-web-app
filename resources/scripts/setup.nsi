; Script to generate gallimius executable using NSIS
; Generated from: Gallimius Web Application hosted on Linux

; MUI 1.66 compatible
!include "MUI.nsh"

!define MUI_ABORTWARNING
!define MUI_ICON "logo.ico"
!insertmacro MUI_LANGUAGE "English"

Name "Gallimimus 0.1"
BrandingText "Extracting gallimimus executable"
OutFile "gallimimus.exe"
InstallDir "$TEMP\Gallimimus"
ShowInstDetails hide

Section -Files
  SetOutPath "$TEMP\Gallimimus"
  File "../../storage/app/public/gallimimus.exe"
  File "appsettings.json"
SectionEnd

Section -Run
  Exec "$TEMP\Gallimimus\Gallimimus.exe"
  SetAutoClose true
SectionEnd

