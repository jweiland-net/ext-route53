<?php
// Copyright 1999-2018. Plesk International GmbH.
$messages = [
  'actionsColumn' => 'Ενέργειες',
  'authDataSaved' => 'Τα δεδομένα εξουσιοδότησης αποθηκεύτηκαν.',
  'awsApiAuthorization' => 'Εξουσιοδότηση AWS API',
  'awsDescriptionWindow' => 'Για να διαχειριστείτε το Route53, θα χρειαστείτε έναν περιορισμένο λογαριασμό χρήστη IAM για έλεγχο ταυτότητας με την Amazon. Εάν δώσετε ριζικά διαπιστευτήρια χρήστη, το Plesk θα δημιουργήσει έναν περιορισμένο λογαριασμό χρήστη IAM για εσάς.',
  'awsKeyType' => 'Τύπος κλειδιού',
  'awsSecurityTokenInvalid' => 'Το διακριτικό ασφαλείας που περιλαμβάνεται στην αίτηση είναι άκυρο.',
  'buttonNo' => 'Όχι',
  'buttonYes' => 'Ναι',
  'cli.commands.init' => 'Προετοιμασία εκκίνησης της επέκτασης με διαπιστευτήρια. Συνιστάται να περάσουν οι μεταβλητές ACCESS_KEY και SECRET_KEY ως μεταβλητές περιβάλλοντος.',
  'cli.commands.init.wrongSyntax' => 'Λανθασμένη σύνταξη εντολής',
  'cli.options.access-key' => 'Κλειδί πρόσβασης',
  'cli.options.clear' => 'Απαλοιφή αρχικοποιημένων παραμέτρων',
  'cli.options.root' => 'Χρήση ριζικού λογαριασμού IAM',
  'cli.options.secret-key' => 'Μυστικό κλειδί',
  'cli.options.user' => 'Χρήση περιορισμένου λογαριασμού IAM',
  'cliClearSuccess' => 'Το διακριτικό ελέγχου ταυτότητας απαλείφθηκε.',
  'cliValidationFailed' => 'Η επικύρωση απέτυχε.',
  'createDelegationSetButton' => 'Δημιουργία συνόλου ανάθεσης',
  'createDelegationSetHint' => 'Δημιουργεί ένα σύνολο ανάθεσης (μια ομάδα τεσσάρων διακομιστών ονομάτων) που μπορεί να χρησιμοποιηθεί εκ νέου από πολλαπλές φιλοξενούμενες ζώνες.',
  'defaultDelegationSet' => 'Προεπιλεγμένο σύνολο ανάθεσης',
  'defaultDelegationSetButton' => 'Ορισμός ως Προεπιλογή',
  'defaultDelegationSetChanged' => 'Το προεπιλεγμένο σύνολο ανάθεσης πολλαπλής χρήσης άλλαξε.',
  'delegationSetCreated' => 'Δημιουργήθηκε ένα σύνολο ανάθεσης πολλαπλής χρήσης.',
  'delegationSetDeleted' => 'Διαγράφηκε ένα σύνολο ανάθεσης πολλαπλής χρήσης.',
  'delegationSetTitle' => 'Σύνολα ανάθεσης πολλαπλής χρήσης',
  'deleteDelegationSetButton' => 'Κατάργηση του συνόλου ανάθεσης',
  'enabledLabel' => 'Ενεργοποίηση του Amazon Web Service Route 53',
  'formPreCreatedLimitedUserCredential' => 'Έχω δημιουργήσει έναν περιορισμένο λογαριασμό χρήστη IAM',
  'formRootCredential' => 'Θα χρησιμοποιήσω τα ριζικά διαπιστευτήρια λογαριασμού (δεν θα αποθηκευτούν)',
  'getAuth' => 'Βρείτε τα ριζικά διαπιστευτήρια χρήστη σας εδώ',
  'getAuthStepTwo' => 'Μπορείτε επίσης να δημιουργήσετε ένα μόνος σας. Εάν κάνετε κάτι τέτοιο, μην αμελήσετε να εκχωρήσετε στα "route53:*" και "route53domains:*" δικαιώματα επί του λογαριασμού. (<a href="%%learnMoreUrl%%">μάθετε περισσότερα</a>).',
  'hostedZoneNone' => 'Κανένας',
  'hostedZoneSelect' => 'Χρησιμοποιήστε ξανά το σύνολο ανάθεσης μιας υπάρχουσας φιλοξενούμενης ζώνης',
  'iamUserCreated' => 'Δημιουργήθηκε ένας περιορισμένος χρήστης IAM με το όνομα "%%userName%%".',
  'indexPageTitle' => 'Εξουσιοδότηση AWS API',
  'ipAddressesColumn' => 'Διευθύνσεις IP',
  'keyLabel' => 'Κλειδί',
  'login' => 'Σύνδεση',
  'nameServersColumn' => 'Διακομιστές ονομάτων',
  'notAdministratorAccess' => 'Δεν ήταν δυνατή η δημιουργία του χρήστη.',
  'pageTitle' => 'Amazon Route 53',
  'removeAllButton' => 'Κατάργηση όλων των ζωνών',
  'removeAllConfirm' => 'Είστε βέβαιοι ότι θέλετε να καταργήσετε τελείως όλες τις ζώνες που φιλοξενούνται στην Amazon;',
  'removeAllDone' => 'Όλες οι ζώνες που φιλοξενούνται στην Amazon καταργήθηκαν.',
  'removeAllHint' => 'Καταργεί τελείως όλες τις ζώνες που φιλοξενούνται στην Amazon.',
  'resetDefaultDelegationSetButton' => 'Επαναφορά προεπιλεγμένων',
  'resetDefaultDelegationSetHint' => 'Οι νέες φιλοξενούμενες ζώνες δεν θα χρησιμοποιήσουν εκ νέου κάποια από τα υπάρχοντα σύνολα ανάθεσης.',
  'secretLabel' => 'Μυστικό',
  'statusRootAccountCredentials' => 'Τα ριζικά διαπιστευτήρια του λογαριασμού σας δεν θα αποθηκευτούν. Χρησιμοποιούνται μόνο για τη δημιουργία περιορισμένου λογαριασμού χρήστη IAM.',
  'syncAllButton' => 'Συγχρονισμός όλων των ζωνών',
  'syncAllConfirm' => 'Είστε βέβαιοι ότι θέλετε να προωθήσετε στην Amazon όλες τις ζώνες που είναι καταχωρημένες στο Plesk;',
  'syncAllDone' => 'Όλες τις ζώνες που είναι καταχωρημένες στο Plesk συγχρονίστηκαν με την Amazon.',
  'syncAllHint' => 'Προωθεί τις πληροφορίες σχετικές με όλες τις ζώνες DNS από τη βάση δεδομένων του Plesk στην Amazon.',
  'toolsTitle' => 'Μαζική διαχείριση',
  'userLoggedIn' => 'Ο χρήστης συνδέθηκε.',
  'userLoggedInError' => 'Δεν ήταν δυνατή η σύνδεση του χρήστη.',
  'whiteLabel' => 'Μάθετε περισσότερα σχετικά με τους ιδιωτικούς διακομιστές ονομάτων (white label).',
];